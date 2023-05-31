<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$password = "password";
$database = "LMSdb";
$conn = mysqli_connect($dbservername, $dbusername,'',$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ="select * from book where BookId='1'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$bookid=$row['BookId'];
$name=$row['Title'];
$publisher=$row['Publisher'];
$year=$row['Year'];
$avail=$row['Availability'];
$rack=$row['rackno'];
echo "<b>Book ID:</b> ".$bookid."<br><br>";
                                echo "<b>Title:</b> ".$name."<br><br>";
echo "<b>Publisher:</b> ".$publisher."<br><br>";
echo "<b>Year:</b> ".$year."<br><br>";
echo "<b>Availability:</b> ".$avail."<br><br>";
echo "<b>Rackno:</b> ".$rack."<br><br>";
mysqli_close($conn) ;
?>