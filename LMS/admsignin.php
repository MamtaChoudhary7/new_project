<?php
require('database\sqldbcreate.php');
?>
<!DOCTYPE html>
<html>

<head>

	<title>Librarian Login Form  </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords"  content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	
<link href="//fonts.googleapis.com/css?family=Roboto:200,300,400,500,700,900" rel="stylesheet">

<script>
  $(document).ready(function(){
    $(".toggle-nav").click(function(){
      $(".menu ul li").slideToggle("slow");
    });
  });
</script>
</head>
<body>
<header>
       <nav class="menu">
         <a class="toggle-nav" herf="#">&#9776;</a>
    <ul>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="signin.php">USER</a></li>
      <li><a href="#">About</a></li>
      <li><a href="home.php">Home</a></li>
    </ul>
   </nav>
 </header>

<h1>TEACHER LOGIN</h1>
<br>
<br>
<br>
<br>

<div class="container">

	<div class="login">
		<h2>Sign In</h2>
		<form action="admsignin.php" method="post">
			<input type="text" Name="teacherId" placeholder="teacherId" required="">
			<input type="password" Name="Password" placeholder="Password" id="myInput" required="">
			<input type="checkbox" onclick="myFunction()">Show Password
		<div class="send-button">
			<!--<form>-->
				<input type="submit" name="signin"; value="Sign In">
        </form>
		</div>
		<div class="clear"></div>
		
		</div>
			
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>
	<div class="footer w3layouts agileits">
		
	</div>
<?php
if(isset($_POST['signin']))
{
$u=$_POST['teacherId'];
$p=$_POST['Password'];
 
$sql="select * from teacher where teacherId='$u'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Password'];

if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
{//echo "Login Successful";
   $_SESSION['teacherId']=$u;
   header('location:admin/index.php');  	
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect ID or Password')</script>";
}

}

?>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>

