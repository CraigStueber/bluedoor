<?php
$emailFrom = $_POST['email'];


$email_subject = 'Newsletter Signup';
$email_body =

    "User Email from the footer : $emailFrom \n";



$to = "Craig <craigstueber@yahoo.com>, Megan <bluedoorms@gmail.com>, Megan <meganstueber@icloud.com>";
$headers = "From: " . $emailFrom;


mail($to, $email_subject, $email_body, $headers);
header("Location: thankyouCM.html");
