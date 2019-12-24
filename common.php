<?php

if( !empty($_GET['debugmode']) ) if($_GET['debugmode'] === "1"){
echo "DEBUGBODE ON!";
error_reporting(E_ALL);
ini_set('display_errors', '1');
}

?>