<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   empty($_POST['address'])   ||
   empty($_POST['selectService'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$address = strip_tags(htmlspecialchars($_POST['address']));
$services = strip_tags(htmlspecialchars($_POST['selectService']));
   
// Create the email and send the message
/*$to = 'info@washoutpressurewashing.co.uk'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nAddress: $address\n\nService Selected: $selectService\n\nMessage:\n$message";
$headers = "From: emailtesting531@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
$mail = mail($to,$email_subject,$email_body,$headers);
if ($mail == true) {
	echo "Sent";
} else {
	echo "Error";
}
return true; */

$to = 'info@washoutpressurewashing.co.uk';
$subject = "Website Contact Form: $name";
$headers = "Reply-To: $email_address";
$message = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nAddress: $address\n\nService Selected: $selectService\n\nMessage:\n$message";
$mail($to, $subject, $message, $headers);
?>