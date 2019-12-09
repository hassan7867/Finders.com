<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request){

        $mail = new PHPMailer(false);
        $mail->isSMTP();
        $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
        $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
        $mail->Port = 587; // TLS only
        $mail->SMTPSecure = 'tls'; // ssl is depracated
        $mail->SMTPAuth = true;
        $mail->Username = 'task.board007@gmail.com';
        $mail->Password = 'Toystory@123';
        $mail->setFrom($request->email, $request->email);
        $mail->addAddress('me.aliriaz007@gmail.com');
        $mail->Subject = 'Finders Property Inquiry Email';
        $mail->msgHTML('Message <br>' . $request->message . '<br><br><br>' . 'From<br>Contact number : ' . $request->phone . '<br>Email : ' . $request->email); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
        $mail->AltBody = $request->message . '<br>' . 'Sender Email : ' . $request->email;
        if (!$mail->send()) {
           return json_encode(['status' => false, 'message' => 'Error Sending Email! Please try again']);
        } else {
            return json_encode(['status' => true, 'message' => 'Message Sent Successfully']);
        }
    }
}
