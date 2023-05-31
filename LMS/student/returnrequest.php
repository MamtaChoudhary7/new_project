<?php
require('sqldbcreate.php');

$id=$_GET['id'];

$roll='178p1a0516';

$sql="INSERT INTO `return` VALUES('$roll','$id')";
if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Request Sent to Admin.')</script>";
header( "Refresh:0.01; url=current.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Request Already Sent.')</script>";
	header( "Refresh:0.01; url=current.php", true, 303);

}




?>