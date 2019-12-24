<?php

include_once "dbcon.php";
include_once "common.php";


$phonenumber = $_POST['phonenumber'];
$sendPhoneNumber = $_POST['sendPhoneNumber'];
$sendDate = $_POST['sendDate'];

$sql = "INSERT INTO calllogdata (phonenumber, sendPhoneNumber, sendDate) VALUES ('$phonenumber', '$sendPhoneNumber', from_unixtime('$sendDate'));";
echo $sql;
run( $sql );

?>
