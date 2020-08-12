<?php
include 'config/config.php';
$location = $_HC['location'];
$getipver = $_HC['getipver'];
$file = "$location/security/ip.txt";

$ip = $_SERVER['REMOTE_ADDR'];
header("IPCatch: Version $getipver");
$data = array($ip);

file_put_contents($file, implode(' ',$data)."\n",FILE_APPEND | LOCK_EX);
?>

