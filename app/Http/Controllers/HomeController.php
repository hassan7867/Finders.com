<?php

namespace App\Http\Controllers;

use App\CommercialFeature;
use App\HomeFeature;
use App\PlotFeature;
use App\Property;
use App\PropertyAttachment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::all();
        for ($i = 0; $i < count($properties); $i++) {
            $properties[$i]['main_image'] = PropertyAttachment::where('id_property', $properties[$i]->id)->first()['image_path'];
            if($properties[$i]['property_type'] == 'home'){
                $properties[$i]['home_features'] = HomeFeature::where('id_property', $properties[$i]->id)->first();
            }
            if($properties[$i]['property_type'] == 'plot'){
                $properties[$i]['plot_features'] = PlotFeature::where('id_property', $properties[$i]->id)->first();
            }
            if($properties[$i]['property_type'] == 'commercial'){
                $properties[$i]['commercial_features'] = CommercialFeature::where('id_property', $properties[$i]->id)->first();
            }
        }
        return view('welcome')->with(['properties' => $properties]);
    }

    public function getCities(Request $request){
        $jsonString = file_get_contents(base_path('public/json/cities.json'));
        $data = json_decode($jsonString, true);
        $cities = [];
        for ($i=0; $i<count($data);$i++){
            if($data[$i]['country'] == $request->country){
                array_push($cities, $data[$i]['name']);
            }
        }
       return json_encode($cities);
    }

    public function getWizard(){
        return view('wizard');
    }
}
