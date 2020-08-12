<?php
  include 'config/config.php';
?>
<body>
<!-- Enter body content here -->
<?php
// Make sure the page system works
$url = $_SERVER['REQUEST_URI'];
if ($url == "/") {
   header("Location: index.php");
}

$request1 = $_SERVER['REQUEST_URI'];
$request2 = substr($request1, 1);
$request3 = rtrim($request2, ".php ");

  // Include all the css files in content/css
  foreach (glob("content/$request3/body/*") as $bodyfiles)
  { include $bodyfiles; }
  echo "\n";
?>

