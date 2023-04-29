<?php
$name = $_post['name'];
$visitors_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from = 'info@website.com'
$email_subject = 'new form submission'
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message.\n";
                
$to = 'sy220534@gmail.com';
$headers ="From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>