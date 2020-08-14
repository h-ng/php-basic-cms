<?php
$ip = $_SERVER['REMOTE_ADDR'];
$split = explode(".", $ip);
$ip1 = $split[0];
$ip2 = $split[2];
$ip3 = $split[3];
$ip4 = "$ip1.xxx.$ip2.$ip3";

$srvip = $_SERVER['SERVER_ADDR'];
$httpver = $_SERVER['SERVER_PROTOCOL'];
$method = $_SERVER['REQUEST_METHOD'];
$access = $_SERVER['SCRIPT_URI'];

$_HC['debug'] = array (
      "visitip" => "$ip4",
      "srvip" => "$srvip",
      "visit" => "$httpver $method",
      "page" => "$access"
      );
