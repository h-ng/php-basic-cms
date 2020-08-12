<?php
  include 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<!-- Basic CMS by <?php echo $_HC['devper'];?> on behalf of <?php echo $_HC['devco'];?> -->
<!-- Enter header content here -->
<?php
  echo "\n";
?>
<?php
$request1 = $_SERVER['REQUEST_URI'];
$request2 = substr($request1, 1);
$request3 = rtrim($request2, ".php ");
header("RequestPath: $request3");
?>
<!-- CSS Files -->
<?php
  // Include all the css files in content/css
  foreach (glob("content/$request3/css/*") as $cssfiles)
  { ?><link rel="stylesheet" src="<?php echo $cssfiles;?>"><?php echo "\n"; }
  echo "\n";
?>
<!-- JavaScript Files -->
<?php
  // Include all the css files in content/css
  foreach (glob("content/$request3/js/*") as $jsfiles)
  { ?><script src="<?php echo $jsfiles;?>"></script><?php echo "\n"; }
  echo "\n";
?>

