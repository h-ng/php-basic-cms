<?php
$visitip = $_SERVER['REMOTE_ADDR'];
$srvip = $_SERVER['SERVER_ADDR'];
$httpver = $_SERVER['SERVER_PROTOCOL'];
$method = $_SERVER['REQUEST_METHOD'];
$access = $_SERVER['SCRIPT_URI'];

$_HC['debug'] = array (
      "visitip" => "$visitip",
      "srvip" => "$srvip",
      "visit" => "$httpver $method",
      "page" => "$access"
      );
