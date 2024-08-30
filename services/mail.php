<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

class Mail{
    public $email;
    public $subject;
    public $mensaje;
    public $body;

    function __construct($email, $subject, $mensaje, $body)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->mensaje = $mensaje;
        $this->body = $body;
    }


    //Create an instance; passing `true` enables exceptions
    public function send()
    {
        try {
            //Server settings                                           //Enable verbose debug output
            $mail = new PHPMailer();
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';             //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = '02cb88558b18ba';                       //SMTP username
            $mail->Password   = 'c6736017b16b86';                       //SMTP password
            $mail->Port       = 2525;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            $mail->setFrom($this->email, 'Mailer');
            $mail->addAddress('joe@example.net', 'Joe User');           //Add a recipient
            
            $mail->isHTML(true);                                       //Set email format to HTML
            $mail->Subject = $this->subject;
            $mail->Body = $this->body;
            $mail->send();

            //Recipients
            // $mail->addAddress('ellen@example.com');                     //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');


            //Content
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}