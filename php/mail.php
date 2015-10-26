<?php $name = $_POST['full-name'];
$email = $_POST['email'];
$phone = $_POST['phone-number'];
$company = $_POST['company-name'];
$message = $_POST['details'];
$formcontent="From: $name \n Email: $email \n Phone: $phone \n Company: $company \n Message: $message";
$recipient = "brown.alex.k@gmail.com";
$subject = "Perfect Contact Form";
$mailheader = "From: $email \r\n";
header("Location: http://alex-k-brown.com/wedding-planner/");
mail($recipient, $subject, $formcontent, $mailheader) or die("Thanks!");
echo "Thank You!";
?>