<?php

//print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if (trim($email) == '') {
    $error = 'Enter your email address';
} elseif (trim($message) == '') {
    $error = 'Enter a massage';
} elseif (strlen($message) < 10) {
    $error = 'Your message too short';
}

if ($error != '') {
    echo $error;
    exit();
} else {
    echo 'All ok!';
}

$subject = "=?utf-8?B?" . base64_encode('Test message') . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('mitpal16@gmail.com', $subject, $message, $headers);
header('Location: /about.php');






