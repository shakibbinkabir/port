<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = "ataulkabirbd@gmail.com";
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
