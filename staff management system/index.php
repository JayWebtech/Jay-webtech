<?php  
session_start();  
  
if(!$_SESSION['admin_name'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
<!DOCTYPE html>
<html>
<title>Staff Management System</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="nilest.jpg">
 <link href="css/style.css" rel="stylesheet">
</head>
<body class="body">
<table border="0" width="80%" align="center" bgcolor="lightgreen">
<tr>
<td align="center" width="10%"><img src="images/nilestu.png"></td>
<td ><font size="5" color="#333" face="verdana"><b>Staff Personal Record and Management System</b></font></td>
</tr>
</table>
<div class="navbar">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="view_users.php">View Users</a></li>
<li><a href="registration.php">Register Staff</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
<div class="container">
<div class="box1">
	<marquee  bgcolor="steelblue" height=300 direction="up">
	<p>Hurry up and register to sae information in a computerized way.</p>
	<p>Computer Database Management system has been the best and secure method of storing any kind of data that can be query or retrieved, searched, edited and deleted depending on your choice of operation </p>
</marquee>
<p><font size="5" color="#333"><h2 align="center"><b>Welcome back Admin!!!</b></h2></font></p>
	<p><font color="#333"><h3 align="center">You can now proceed to make your changes</h3> </p></font>
</div>
<div class="box2">
	<p>Welcome to staff personal record and management system. This system enables an individual to register a staff and the details will be store in the database for future use. In this system, only the admin is authorized to view, delete and edit record in the database.</p>
</div>
<div class="side">
    <img src="images/globe_10.gif">
	<img src="images/second.jpg">
	<img src="images/first.jpg">
	<img src="images/set.jpg">
</div>
</div>
<div class="footer">
	<p>&copy; Copyright 2018</p>
</div>
</body>













