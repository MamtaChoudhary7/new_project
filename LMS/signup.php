<?php
require('database\sqldbcreate.php');
?>

<!DOCTYPE html>
<html>

<head>

	<title>Library Member Signup Form </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords"  content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" "/>
	
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="style.css" type="text/css" media="all">

	<link href="//fonts.googleapis.com/css?family=Roboto:200,300,400,500,700,900" rel="stylesheet">
	

	</head>

	<body>
	<header>
       <nav class="menu">
         <a class="toggle-nav" herf="#">&#9776;</a>
    <ul>
      <li><a href="contact.html">Contact</a></li>
	  <li><a href="signin.php">user</a></li>
      <li><a href="admsignin.php">Admin</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="home.php">Home</a></li>
    </ul>
   </nav>
 </header>

	<h1>STUDENT SIGNUP</h1>
	<br>
	<br>
	<br>
	<br>

	<div class="container">
		<div class="login">
			<h2>Sign Up</h2>
			<form action="signup.php" method="post">
			<input type="text" Name="RollNo" placeholder="Roll Number" required="">
				<input type="text" Name="Name" placeholder="Name" required>
				<input type="text" Name="Email" placeholder="Email" required>
				<input type="text" Name="PhoneNumber" placeholder="Phone Number" required>
				<input type="password" Name="Password" placeholder="Password" required>
				
				<select name="YEAR" id="branch">
				<option value="">year</option>
					<option value="I">I</option>
					<option value="II">II</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
					
				</select>
				<br>
				<br>
				<select name="BRANCH" id="branch">
				<option value="">branch</option>
					<option value="CSE">CSE</option>
					<option value="ECE">ECE</option>
					<option value="EEE">EEE</option>
					<option value="MECH">MECH</option>
					
				</select>
				<br>
			
			
			<br>
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			<div class="clear"></div>
			
		</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<!-- <p> &copy; 2020 Library Member Login. All Rights Reserved </a></p>
		<p><a class="underline" href="about.html">About the Project</a></p> -->
	</div>

	<?php
if(isset($_POST['signup']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$mobno=$_POST['PhoneNumber'];
	$rollno=$_POST['RollNo'];
	$year=$_POST['YEAR'];
	$category=$_POST['BRANCH'];
	
    $sql11="select * from student";
	$result=$conn->query($sql11);
    $row=$result->fetch_assoc();
	$roll=$row['RollNo'];
	$sql12="select * from user";
	$result=$conn->query($sql12);
    $row12=$result->fetch_assoc();
	$roll12=$row12['RollNo'];
if($rollno != $roll && $rollno != $roll12 ){

$sql="insert into student (RollNo,Name,Year,Branch,EmailId,MobNo,Password) values ('$rollno','$name','$year','$category','$email','$mobno','$password')";

if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful and wait for confirm from admin')</script>";
}
 
else {
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}
}
?>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>

</html>