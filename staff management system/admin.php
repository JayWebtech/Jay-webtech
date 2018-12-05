<?php  
session_start();//session starts here  
?>  
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<header>
	<p><b>Admin Login</b></p>
</header>
<body bgcolor="#ddd">
	<div class="main">
		<form action="admin.php" method="POST">
			<br><br><br>
		<p>Username</p>
		<input type="text" name="admin_name" placeholder="Enter Username" autofocus>
		<p>Password</p>
		<input type="password" name="admin_pass" placeholder="Enter Password" autofocus>
		<button class="btn" name="login" type="submit">Login</button>
		</form>
	</div>
</body>
</html>
<?php  

include("db_connection.php");  
  
if(isset($_POST['login'])) 
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('home.html','_self')</script>"; 
    }  
    else {echo"<script>alert('Incorrect Login Details!')</script>";}  
  
}  
  
?>
