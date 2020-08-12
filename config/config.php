<?php
// hngCMS (hn.fyi/~hng/)

// Basic Variables
// These define the basics for the CMS
$_HC['location'] = "/var/www/html"; // This should be the root of your installation/webserver
$_HC['domain'] = "192.168.0.119"; // This is the main domain, showed on copyright and antiddos

// Conatct & Meta Details
$_HC['adminname'] = "My Name"; // This is the name shown in your footer & [if you want] included with debug
$_HC['adminemail'] = "your@email.com"; // This is the email shown in your page's footer & if you block someone, this should be active
$_HC['sitename'] = "My awesome site"; // This is the name/site name that is shown in the meta tags & header/title
$_HC['sitedesc'] = "My amazing site, now up and running!"; // This is the description shown in meta tags (like in google)

// Footer information
$_HC['showfoot'] = "yes"; // Show footer with copyright (Change below)
$_HC['showname'] = "yes";  // Show name at footer, yes to show, anything else to hide
$_HC['showemail'] = "yes"; // Show email at footer, yes to show, anything else to hide

$_HC['showcredit'] = "yes"; // This will show credits to us, feel free to disable

// Security options
$_HC['browserchallenge'] = "yes"; // This checks that the browser is secure, if you want curl or wget access, enter no
$_HC['getip'] = "yes"; // Enable the IP logging service
$_HC['admpass'] = "password"; // Password for web console (/console/console.php)
$_HC['ipblock'] = "yes"; // Enable IP Blocking service
$_HC['blocked'] = array( // These are the ip's banned to access your site, to format this, google 'PHP Arrays'
      'xxx.xxx.xxx.xxx',
      'xxx.xxx.xxx.xxx'
     );

// CMS Version & PHP version
// These should generally not be changed, changing things marked [DON'T CHANGE] may corrupt your installation
$_HC['version'] = "1.0"; // [DON'T CHANGE] This is the version
$_HC['devco'] = "HNG Networks"; // [DON'T CHANGE] This is the developing company
$_HC['devper'] = "Hayden NG"; // [DON'T CHANGE] This is the developing person
$_HC['key'] = "changeme"; // This is the key used in the antiddos program, it should be random, and not guesable
$_HC['getipver'] = "1.0"; // [DON'T CHANGE] The getipprogram version
$_HC['antiddosver'] = "1.0"; // [DON'T CHANGE] The antiddos program version
$_HC['blockipver'] = "1.1"; // [DON'T CHANGE] The ipblock version
