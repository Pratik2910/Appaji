<?php
$name=$_POST['name'];
$visitor_email =$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form = 'pratikrajurkar34@gmail.com';
$email_subject = "New From Submission";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "subject: $subject.\n".
                  "User Message: $message.\n";
$to = 'pratikrajurkar34@gmail.com';
$headers = "Form: $email_form \r\n";
$headers = "Reply-To: $visitor_email \r\n";


mail($to.$email_subject,$email_body,$headers);
header("Location: Contacts.html")

?>