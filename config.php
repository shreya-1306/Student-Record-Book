<?php
require_once "GoogleAPI/vendor/autoload.php";
$gClient = new Google_Client();
$gClient -> setClientId("68631579970-v0sha2co9iv07f9lsfs8c00noik9b7b1.apps.googleusercontent.com");
$gClient -> setClientSecret("xv5L9rHXanJvJQLiGZd2TIBA");
$gClient -> setApplicationName("Departmental Record Book");
$gClient -> setRedirectUri("http://localhost/Student-Record-Book/g-callback.php");
// $gClient -> setRedirectUri("home.php");

$gClient -> addScope(" https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>