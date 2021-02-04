<?php
require('textlocal.class.php');

$textlocal = new Textlocal('false, false, API_KEY');

$numbers = array(Mobile);
$sender = 'TXTLCL';
$message = '"Hello " . $_POST['uname'] . " This is your OTP: " . $otp;';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>