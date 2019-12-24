<?php

include_once "dbcon.php";
include_once "common.php";

print_r($_POST);

$number = $_POST['number'];
$key = $_POST['key'];


$sql = "INSERT INTO key_table (phonenumber, apikey) VALUES ('$number','$key');";
run( $sql );

?>

