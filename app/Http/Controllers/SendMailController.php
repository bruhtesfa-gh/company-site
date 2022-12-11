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
            'name' => ['string', 'max:255'],
            'email' => ['email'],
            'subject' => ['string', 'max:255'],
            "message" => ['string']
        ]);
        if ($this->sendEmail($validated['name'], $validated['email'], $validated['subject'], $validated['message'])) {
            return response()->json(["success" => true, "error" => false]);
        }
        return response()->json(["success" => false, "error" => true]);
    }

    private function sendEmail($name, $email,  $subject, $message)
    {
        try {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'noreply@fejleszto-tech.com';                     //SMTP username
                $mail->Password   = '';                               //SMTP password
                $mail->SMTPSecure = 'tsl';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                $mail->setFrom('noreply@fejleszto-tech.com', '');

                $mail->addAddress($email, $name);
                //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                $mail->addReplyTo('support@fejleszto-tech.com', 'For More Information');
                $mail->addCC('noreply@fejleszto-tech.com');

                $_message = '<div style="width: 100%; display: flex; justify-content: center;">
                                <div style="width: 720px;">
                                    <img src="http://127.0.0.1:8000/assets/logo/fejleszto-capp-trasparent.png" alt="">
                                    <div>
                                        <h3 style="color: dodgerblue; font-size: 3rem; margin: 0; padding: 0;">Technology</h3>
                                        <hr>
                                    </div>
                                    <div>
                                        <p>
                                            Hello, ' . $name . '
                                        </p>
                                        <p>
                                            Thank you for contacting the Fejlesztő Technologies. This is an automated message to notify you that
                                            we recieved your massage. We will contact you as soon as possible in a few hours
                                        </p>
                                        <hr>
                                        <p>
                                            Fejlesztő Technologies , 04 Giorgis Rd Frindship building 3rd Floor
                                            <br>
                                            Bahir Dar, Ethiopia
                                            <br>
                                            <a href="mailto:support@fejleszto-tech.com">support@fejleszto-tech.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>';
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $_message;
                //$mail->AltBody = 'go to ' . $this->link;
                if ($mail->Send()) {
                    return true;
                } else {
                    return false;
                }
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
