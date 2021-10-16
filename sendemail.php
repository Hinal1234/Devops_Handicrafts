<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['Message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pblalask@gmail.com';
        $mail->Password = 'pblpblpbl';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('pblalask@gmail.com');
        $mail->addAddress('pblalask@gmail.com');//receive here

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (ContactPage)';
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

        $mail->send();
        $alert = '<div class="alert-success">
                     <span> Message Sent! Thankyou for contacting Us</span>
                  </div>';
    } catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';
    }
}
?>