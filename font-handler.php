<?php 
$name = $_POST['name'];
$visitor_email = &_POST['email'];
$message = &_POST['message'];

$email_form = 'MFG.com';
$email_form = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email:$visitor_email.\n".
                    "User mMssage: $message.\n".;

$to = 'jimlouko4@gmail.com';
$headers = "From:$email_form \r\n";
$headers = "Reply-To $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location : contact.html")

?>