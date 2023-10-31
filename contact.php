<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $subject=$_POST['subject'];
        $mailFrom=$_POST['email'];
        $message=$_POST['message'];

        $mailBody="From: $name"."::"."$mailFrom\nMessage: $message";
        //mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
        
        $mailTo="nikhilpatidar0@gmail.com";

        mail($mailTo, $subject, $mailBody);
    }
?>