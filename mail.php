<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$message = $_POST['message'];
$to = "alirifaz21@gmail.com";
$subject = "Mail From tautsecure";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n  Phone = " . $number . "\r\n Message =" . $message;
$headers = "From: noreply@tautsecure.com" . "\r\n";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
// header("Location:thankyou.html");
echo '<script>alert("Thank you for contacting us!");</script>';

// Refresh the current page using JavaScript
echo '<script>location.reload();</script>';
