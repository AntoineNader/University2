<?php
$name=$-POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email-from='info@yourwebsite.com';
$email-subject='New Form Submission';

$email-body="User Name: $name.\n".
             "User Email:$visitor_email.\n".
              "Subject:$subject.\n".
               "User Email$message.\n";

$to='antoinenader77@gmail.com';

$headers="From: $email-from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email-subject,$email-body,$headers);
header("Location: contact.html");


?>