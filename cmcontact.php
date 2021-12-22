<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$emailFrom = $_POST['email'];
$message = $_POST['message'];

$email_subject = 'CUSTOM MEMORIES';
$email_body =
    "User Name : $name \n" .
    "User Email : $emailFrom \n" .
    "User Message: $message \n";


$to = "Craig <craigstueber@yahoo.com>, Megan <bluedoorms@gmail.com>, Megan <meganstueber@icloud.com>";
$headers = "From: " . $emailFrom;


mail($to, $email_subject, $email_body, $headers);
header("Location: thankyouCM.html");
