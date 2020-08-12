<?php
include 'config/config.php';

$antiddosver = $_HC['antiddosver'];
$getipver = $_HC['getipver'];
$blockipver = $_HC['blockipver'];

header("JSChallenge: Version $antiddosver");
header("IPCatch: Version $getipver");
header("IPBlock: Version $blockipver");

if($_HC['ipblock'] == "yes") {
  include 'security/ipblock.php';
} else {
}

if($_HC['browserchallenge'] == "yes") {
  include 'security/antiddos.php';
} else {
}

if($_HC['getip'] == "yes") {
  include 'security/getip.php';
} else {
}

