<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$email_form = "admin@shakibbinkabir.me";
$email_subject = "New Response on Your Site";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Messege: $message.\n";
                
$to = "shakibbinkabir@gmail.com";
$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>
