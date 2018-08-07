<?php
// Check for empty fields
if (empty($_POST['firstname']) ||
	empty($_POST['lastname']) ||
	empty($_POST['email']) ||
	empty($_POST['phone']) ||
	empty($_POST['message']) ||
	!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo "No arguments Provided!";
	return false;
}

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$site = $_SERVER['SERVER_NAME'];

// Create the email and send the message
$to = 'johnm152777@gmail.com';
$email_subject = "A new contact lead from $first $last | $site";
$email_body = "First Name: $first\nLast Name: $last\nContact Phone: $phone\nEmail Address: $email_address\nMessage: $message";
$headers = "From: $first $last@$site\n";
$headers .= "Reply-To: $email_address";
mail($to, $email_subject, $email_body, $headers);
$emailSent = true;
// exit;
