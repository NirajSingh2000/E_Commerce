<?php

if(isset($_POST['submit_form'])){
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$phone = $_POST['phone'];
$FromName = "NikkuStore";
$FromEmail = 'niraj2019@ismpatna.ac.in';
$ReplyTo = $email;
$toemail = "snirajsingh678@gmail.com";
$subject = "NikkuStore Contact Form";
$message = 'Name:-'.$name.'<br> Email:-'.$email.'<br> Mobile:-'.$phone.'<br> Message:-'.$msg.
$headers = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: ".$FromName."<".$FromEmail.">\n";
    $headers .= "Reply-To:".$ReplyTo."\n";
    $headers .= "X-Sender: <".$FromEmail.">\n";
    $headers .= "X-Mailer: PHP\n";
    $headers .= "X-Priority: 1\n";
    $headers .= "Return-Path: <".$FromEmail.">\n";
    if(mail($tomail, $subject, $message, $headers,'-f'.$FromEmail)){
        $hide=1;
        echo '<strong>'.$name.'</strong>Your message has been sent. we will reply soon as possible. Thankyou';
    }
    else{
        echo "The server failed to send the message. Please try again Later.<br> Thankyou.";
    }

}
if(!isset($hide))


?>