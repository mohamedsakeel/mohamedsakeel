<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "mhmdsakeel123@gmail.com";
        $body = "";

        $body .= "From: ".$name. "\r\n";
        $body .= "Email: ".$visitor_email. "\r\n";
        $body .= "From: ".$message. "\r\n";

        mail($to,$subject,$message);

        $message_sent = true;
    }


    

}



?>