<?php
include '../config/config.php';

echo "This script will create a log file, you can send this to us if you have an error, or just keep it";

// Set time variables
$time = time();
$readtime = date('Y-m-d H:i:s');

// Set ip variable (but only show 3 digits)
$ip = $_SERVER['REMOTE_ADDR'];
$split = explode(".", $ip);
$ip1 = $split[0];
$ip2 = $split[2];
$ip3 = $split[3];
$ip4 = "$ip1.xxx.$ip2.$ip3";

// Get stuff from config.php
$cmsver = $_HC['version'];
$devco = $_HC['devco'];
$devper = $_HC['devper'];
$dev = "$devper of $devco";
$getipver = $_HC['getipver'];
$antiddosver = $_HC['antiddosver'];
$blockipver = $_HC['blockipver'];
$webroot = $_HC['location'];
$domain = $_HC['domain'];

$adminemail = $_HC['adminemail'];
$logfile = "log-$time.log";

echo "<br>";
$data = array (
   "timestamp" => "$time / $readtime",
   "ip" => "$ip4",
   "ver" => array ("cmsver"=>"$cmsver","getip"=>"$getipver","blockipver"=>"$blockipver","antiddosver"=>"$antiddosver"),
   "author" => "$dev",
   "webroot" => "$webroot",
   "domain" => "$domain"

);

if($_HC['logging'] == "yes") {
   file_put_contents("$logfile", print_r($data, true));
} else {
   echo "The system admin ($adminemail) has disabled creating logs";
}
