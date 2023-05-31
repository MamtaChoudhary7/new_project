<?php
require('sqldbcreate.php');

$bookid=$_GET['id1'];

$rollno=$_GET['id2'];

$sql="delete from return where RollNo='$rollno' and BookId='$bookid'";

if($conn->query($sql) === TRUE)
{
	$sql1="insert into message (RollNo,Msg,Date,Time) values ('$rollno','Your request for renew of BookId: $bookid  has been rejected',curdate(),curtime())";
 $result=$conn->query($sql1);
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=returnrequests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=returnrequests.php", true, 303);

}




?>