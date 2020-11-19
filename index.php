<?php
//The url you wish to send the POST request to
$email = "email";
$password = "password";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://www.example.com/tester.phtml");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "email=$email&password=$password&postvar3=value3");

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close($ch);

// Further processing ...
if ($server_output == "OK") {

} else {

}