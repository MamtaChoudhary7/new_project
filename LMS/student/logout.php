<?php
if(! isset($_SESSION["RollNo"]) ){
session_start();
session_destroy();
header("location:/library management system/signin.php");
exit;
}
?>

