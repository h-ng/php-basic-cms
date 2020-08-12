<?php
include 'config/config.php';
$deny_ips = $_HC['blocked'];
$adminemail = $_HC['adminemail'];

$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';

// search current IP in array in config.php
if ( (array_search($ip, $deny_ips))!== FALSE ) {
  echo 'Your IP adress ('.$ip.') was blocked, contact the admin at '.$adminemail.'';
  header("Info-IPBlock: denied");
  exit;
} else {
  header("Info-IPBlock: allowed");
}
