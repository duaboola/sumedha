<?php $name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$brief_message = $_POST['brief_message'];
$formcontent="From: $name \n Message: $brief_message $phone $checked";
$recipient = "ismailshibiliya@gmail.com";
$subject = "Web Form Submission";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<script>location.href='thankyou.html';</script>"
?>