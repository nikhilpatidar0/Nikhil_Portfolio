<?php

use  PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert='';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='sendermail@mail';
        $mail->Password='password';
        $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port='587';

        $mail->setFrom('sendermail@mail');
        $mail->addAddress('receivermail@mail');
         
        $mail->isHTML(true);
        $mail->Subject=$subject;
        $mail->Body="<h3>Name: $name <br>Email: $email<br>Subject: $subject<br>Message: $message</h3>";

        $mail->send();
        $alert ='<div class="alert alert-success">
                    <span>!!!Message Sent!!! <br> Thank you for reaching out.</span>
                </div>';
    }catch(Exception $e){
        $alert ='<div class="alert alert-error">
                    <span>'.$e->getMessage().'</span>
                    </div>';
    }
}

?>
