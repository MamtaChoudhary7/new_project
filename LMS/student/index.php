<?php
require('sqldbcreate.php');
?>

<?php

if(!isset($_SESSION["RollNo"]) ){
    session_start();
header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>LMS</title> -->
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/the1.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
       
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="messages.php"><i class="menu-icon icon-inbox"></i>Messages</a>
                                </li>
                                <li><a href="allbook.php"><i class="menu-icon icon-book"></i>All Books </a></li>
                                <li><a href="history.php"><i class="menu-icon icon-tasks"></i>Previously Borrowed Books </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Recommend Books </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                    	<center>
                           	<div class="card" style="width: 50%;"> 
                    			<img class="card-img-top" src="images/profile2.png" alt="Card image cap">
                    			<div class="card-body">

                                <?php
                                $rollno = $_SESSION['RollNo'];
                                $sql="select * from user where RollNo='$rollno'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['Name'];
                                $year=$row['year'];
                                $category=$row['Branch'];
                                $email=$row['EmailId'];
                                $mobno=$row['MobNo'];
                                ?>    
                    				<i>
                    				<h1 class="card-title"><center><?php echo strtoupper($name) ?></center></h1>
                    				<br>
                    				<p><b>Email ID: </b><?php echo $email ?></p>
                    				<br>
                    				<p><b>Roll No: </B><?php echo strtoupper($rollno) ?></p>
                    				<br>
                                    <p><b>year: </b><?php echo $year ?></p>
                    				<br>
                    				<p><b>Branch:</B><?php echo $category ?></p>
                    				<br>
                    				<p><b>Mobile number: </b><?php echo $mobno ?></p>
                    				</b>
                                </i>

                    			</div>
                    		</div>
                            <br>
                            <a href="edit_details.php" class="btn btn-primary">Edit Details</a> 
      					</center>              	
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>

<?php 


?>