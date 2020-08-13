<?php
  include 'config/config.php';
?>
<footer>
<!-- Enter footer content here -->
<center>
<?php if($_HC['showfoot'] == "yes") {?>
<font size="-2">Copyright [c]
<?php if($_HC['showname'] == "yes") { ?><?php echo $_HC['adminname'];?><?php } else { echo "The admins of "; echo $_HC['domain']; }?>
<?php if($_HC['showemail'] == "yes") { ?><?php echo " ("; echo $_HC['adminemail']; echo ")";?><?php } else { echo ""; }?>
</font>
<?php } else { echo ""; }?>
<?php if($_HC['showcredit'] == "yes") {?>
<br>
<font size="-2">Made by <?php echo $_HC['devper'];?> on behalf of <?php echo $_HC['devco'];?> (Version <?php echo $_HC['version'];?>)
</font>
<?php } else { echo ""; }?>
<?php if($_HC['enabledebug'] == "yes") {?>
<?php $url1 = parse_url($_SERVER['REQUEST_URI']);?>
<hr>
</center>
<pre>Recieved debug information:</pre>
<?php echo '<pre>'; print_r($url1); echo '</pre>'; ?>
<?php } else {}?>
</center>
