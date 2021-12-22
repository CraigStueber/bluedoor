<?php
$name = $_POST['name'];

$emailFrom = $_POST['email'];


$email_subject = 'Newsletter Blue Door';
$email_body =
    "User Name : $name \n" .
    "User Email : $emailFrom \n";



$to = "Craig <craigstueber@yahoo.com>,Megan <bluedoorms@gmail.com>, Megan <meganstueber@icloud.com>";
$headers = "From: " . $emailFrom;


mail($to, $email_subject, $email_body, $headers);
header("Location: thankyou.html");
