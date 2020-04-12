<?php

namespace App\Http\Controllers;

use App\PropertyContact;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request){
        $receiverEmail = PropertyContact::where('id_property', $request->propertyId)->first()['email'];
        
        $msg =  $request->message;

        $msg = wordwrap($msg,70);
        $uid = md5(uniqid(time()));
        $eol = PHP_EOL;
        $header = "From: ".$request->email." <".$request->email.">".$eol;
        $header .= "Reply-To: ".$request->email.$eol;
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"";
        // send email
        mail($receiverEmail,"GoFindee Property Inquiry Email",$msg, $header, "-f".$request->email);
        return json_encode(['status' => true, 'message' => 'Email sent successfully!']);
    }
    
    public function sendMessage(Request $request){
        $fromEmail = "info@gohttp://gofindee.com";
        $msg = $request->message;
        $uid = md5(uniqid(time()));
        $eol = PHP_EOL;
        $header = "From: ".$request->name." <".$request->email.">".$eol;
        $header .= "Reply-To: ".$request->email.$eol;
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"";
        $msg = wordwrap($msg,70);
        mail("info@gohttp://gofindee.com",$request->name ." has sent you message from GoFindee",$msg, $header, "-f".$fromEmail);
        return json_encode(['status' => true, "message" => "Message sent successfully!"]);
    }
}
