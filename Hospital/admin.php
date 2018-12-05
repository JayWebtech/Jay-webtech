<?php  
session_start();//session starts here  
?>  
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="css/style1.css" rel="stylesheet">
</head>
<body >
	<div class="loginbox">
		<p class="text"><b>ADMIN LOGIN</b></p>
		<form action="admin.php" method="POST">
			<br>
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username" autofocus>
		<p>Password</p>
		<input type="password" name="password" placeholder="Enter Password" autofocus><br>
		<button class="btn" name="login" type="submit">Login</button>
		</form>
	</div>
</body>
</html>
<?php  

include("db_connection.php");  
  
if(isset($_POST['login'])) 
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
  
    $admin_query="select * from admin_login where username='$username' AND password='$password'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('view_appointment.php','_self')</script>"; 
    }  
    else {echo"<script>alert('Incorrect Login Details!')</script>";}  
  
}  
  
?>
