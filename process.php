<?php
$error = "";

$secret = "6LdRAmggAAAAAH2Dsvfmf4Hemr93PoKDzDGrKcVp";
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST["g-recaptcha-response"];
$verify = json_decode(file_get_contents($url));
if (!$verify->success) { $error = "Invalid captcha"; }

