<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$conn = mysqli_connect($dbservername, $dbusername, );
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else

  echo "connected successfly";

?>