<?php
$email = "stumpm@kean.edu";
echo "Email Sent Successfully". "<br>";
echo "The form was sent by: " . $_POST['name'] . "<br>";
echo "Your email is: " . $_POST['mail'] . "<br>";
echo "Your comments are: " . $_POST['comment'] . "<br>";
echo "Message was emailed to: stumpm@kean.edu"  . "<br>";

$to = "stumpm@kean.edu";
$subject = "Thank you for using my page!" . $_POST['name'];
$txt = $_POST['comment'];
$headers = "From: " . $_POST['mail'] . "\r\n" . "CC: morganstump14@gmail.com";

mail($to,$subject,$txt,$headers);
?>