<?php
  include 'config/config.php';
?>
<body>
<!-- Enter body content here -->
<?php
$url = $_SERVER['REQUEST_URI'];
$url1 = parse_url($_SERVER['REQUEST_URI']);

if($url1['path'] == "/") {
  if(isset($url1['query'])){
    header("Location: index.php");
  }
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

