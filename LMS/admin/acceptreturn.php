<?php
require('sqldbcreate.php');

$bookid=$_GET['id1'];
$rollno=$_GET['id2'];
$dues=$_GET['id3'];

$sql="select year from user where RollNo='$rollno'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$category=$row['year'];

$sql1="update record set Date_of_Return=curdate(),Dues='$dues' where BookId='$bookid' and RollNo='$rollno'";

if($conn->query($sql1) == TRUE)
{
 $sql3="update book set Availability=Availability+1 where BookId='$bookid'";
 $result=$conn->query($sql3);
 $sql4="DELETE FROM `return` WHERE BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql4);
 $sql6="delete from renew where BookId='$bookid' and RollNo='$rollno'";
 $result=$conn->query($sql6);
 $sql5="insert into message (RollNo,Msg,Date,Time) values ('$rollno','Your request for return of BookId: $bookid  has been accepted',curdate(),curtime())";
 $result=$conn->query($sql5);
 echo "<script type='text/javascript'>alert('Success')</script>";
 header( "Refresh:0.01; url=return_requests.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:1; url=return_requests.php", true, 303);
}
?>