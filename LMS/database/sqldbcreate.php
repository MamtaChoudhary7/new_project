<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$password = "password";
$dbname = "LMSdb";

$conn = mysqli_connect($dbservername, $dbusername,'',$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>