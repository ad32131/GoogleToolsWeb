
<?php

include_once "dbcon.php";
include_once "common.php";


$phonenumber = $_POST['phonenumber'];
$msg = $_POST['msg'];
$msg = preg_replace("/ /", "+", $msg);

$sendPhoneNumber = $_POST['sendPhoneNumber'];
$msg_date = $_POST['msg_date'];


$sql = "INSERT INTO smsdata (phonenumber, msg, sendPhoneNumber, msg_date) VALUES ('$phonenumber','$msg','$sendPhoneNumber',from_unixtime('$msg_date'));";

run( $sql );

?>
