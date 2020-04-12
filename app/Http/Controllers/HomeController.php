<?php

namespace App\Http\Controllers;

use App\CommercialFeature;
use App\HomeFeature;
use App\PlotFeature;
use App\Property;
use App\PropertyAttachment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $videoFiles = ['WEBM', 'MPG', 'MP2', 'MPEG', 'MPE', 'MPV', 'OGG', 'MP4', 'M4P', 'M4V', 'AVI', 'WMV', 'MOV', 'QT'];
        $properties = Property::all();
        for ($i = 0; $i < count($properties); $i++) {
            $path = PropertyAttachment::where('id_property', $properties[$i]->id)->first()['image_path'];
            if(!empty($path)){
                $extension = explode('.', $path)[1];
                if(in_array(strtoupper($extension), $videoFiles)){
                    $properties[$i]['main_video'] = $path;
                }else{
                    $properties[$i]['main_image'] = $path;
                }
            }
            if ($properties[$i]['property_type'] == 'home') {
                $properties[$i]['home_features'] = HomeFeature::where('id_property', $properties[$i]->id)->first();
            }
            if ($properties[$i]['property_type'] == 'plot') {
                $properties[$i]['plot_features'] = PlotFeature::where('id_property', $properties[$i]->id)->first();
            }
            if ($properties[$i]['property_type'] == 'commercial') {
                $properties[$i]['commercial_features'] = CommercialFeature::where('id_property', $properties[$i]->id)->first();
            }
        }
        return view('welcome')->with(['properties' => $properties]);
    }

    public function getCities(Request $request)
    {
        $jsonString = file_get_contents(base_path() . '/public/json/cities.json');
        $data = json_decode($jsonString, true);
        $cities = [];
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['country'] == $request->country) {
                array_push($cities, $data[$i]['name']);
            }
        }
        return json_encode($cities);
    }

    public function getWizard()
    {
        return view('wizard');
    }

    public function getAboutUs()
    {
        return view('about-us');
    }

    public function getContactUs()
    {
        return view('contact-us');
    }

    function getUserIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function getAgents()
    {
        return view('agents');
    }

    public function getProjects()
    {
        return view('projects');
    }

    public function saveUser(Request $request)
    {
        if (empty($request->name) || empty($request->phone) || empty($request->password)) {
            return json_encode(['status' => false, 'message' => 'invalid data']);
        }
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return json_encode(['status' => false, 'message' => 'invalid email']);
        }
        if (User::where('email', $request->email)->exists()) {
            return json_encode(['status' => false, 'message' => 'email already exists']);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->phone = $request->phone;
        $result = $user->save();
        return json_encode(['status' => $result, 'message' => 'signup successfully!', 'id' => $user->id]);
    }

    public function isLoggined($id)
    {
        if (User::where('id', $id)->exists()) {
            $user = User::where('id', $id)->first();
            return json_encode(['status' => true, 'id' => $user->id, 'email' => $user->email, 'name' => $user->name, 'phone' => $user->phone]);
        }
        return json_encode(['status' => false]);
    }

    public function login(Request $request)
    {
        if (User::where(['email' => $request->email, 'password' => md5($request->password)])->exists()) {
            $user = User::where(['email' => $request->email, 'password' => md5($request->password)])->first();
            return json_encode(['status' => true, 'message' => 'successfully login', 'id' => $user->id]);
        }
        return json_encode(['status' => false, 'message' => 'Invalid Credentials']);
    }

    public function forgetPassword(Request $request){
        if(!User::where('email', $request->email)->exists()){
            return json_encode(['status' => false, 'message' => 'email not registered']);
        }
        $token = base64_encode($request->email);
        $msg =  "Please click on link to set your password". PHP_EOL;
        $msg .= "http://gofindee.com/forget/$token/get";
        $uid = md5(uniqid(time()));
        $eol = PHP_EOL;
        $header = "From: ".'gofindee.com'." <".'gofindee.com'.">".$eol;
        $header .= "Reply-To: ".'hr@gofindee.com'.$eol;
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"";
        // send email
        mail($request->email,"GoFindee Forget Password Email",$msg, $header, "-f".$request->email);
        return json_encode(['status' => true, 'message' => 'Email sent successfully!']);
    }

    public function changePassword(Request $request) {
        $request->email = base64_decode($request->token);
        if(!User::where('email', $request->email)->exists()){
            return json_encode(['status' => false, 'message' => 'email not registered!']);
        }
        $user = User::where('email', $request->email)->first();
        $user->password = md5($request->password);
        $user->update();
        return json_encode(['status' => true, 'message' => 'password changed successfully!']);
    }

    public function setPasswordView($token){
        return view('set-password');
    }
}
