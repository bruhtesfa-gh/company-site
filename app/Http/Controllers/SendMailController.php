<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SendMailController extends Controller
{
    //

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string', 'max:255'],
            "massage" => ['required', 'string']
        ]);

        if ($this->sendEmail($validated['name'], $validated['email'], $validated['subject'], $validated['message'])) {
            return redirect()->back()->with('message', 'Email Received');
        }
        return redirect()->back()->with('error', 'Some error occurred Please try again');
    }

    private function sendEmail($name, $email,  $subject, $massage)
    {
        try {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'development@ewea-ercs.org';                     //SMTP username
                $mail->Password   = 'tIyuKdLUX8';                               //SMTP password
                $mail->SMTPSecure = 'tsl';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                $mail->setFrom('development@ewea-ercs.org', '');

                $mail->addAddress($email, $name);
                //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                $mail->addReplyTo('development@ewea-ercs.org', 'For More Information');
                $mail->addCC('development@ewea-ercs.org');

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = "*This is a system generated email - please do not reply* <br> Dear " . $name . " <br> " . $subject;
                //$mail->AltBody = 'go to ' . $this->link;

                $mail->send();
                //echo 'Message has been sent';
            } catch (Exception $e) {
                return false;
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
