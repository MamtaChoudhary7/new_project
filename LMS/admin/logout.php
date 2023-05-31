
<?php
if(! isset($_SESSION["teacherId"]) ){
session_start();
session_destroy();
header("location:http://localhost/library%20management%20system/admin/admsignin.php");
exit;
?>
