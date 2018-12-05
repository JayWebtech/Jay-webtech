<html>
<head>
	<title> Hikma Hospital </title>
	
	<link href="css/style.css" type="text/css" rel="stylesheet">
	
</head>
<body>
	
	<div class="top">
		<div>
		 Contact Us +234 8117662213 / Hikma@hospital.com 
		</div>
	</div>
	
	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> Hikma <font color="#428bca"> Specialist </font><font color="#428bca"> Hospital</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="index.html">HOME</a> 
							<a href="about.html">ABOUT US</a>  
							<a href="service.html">OUR SERVICE</a>
							<a href="appointment.html">MAKE APPOINTMENT</a> 
							<a href="contact.html">CONTACT US</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<div class="bottom_up">
		<div>
				Make an Appointment
				
				<table>
										
					<tr>
						<form action="appointment.php" method="POST">
						<td width="500px"> </td>
						<td>	<input type="text" name="firstname" placeholder="First Name">
						<td> 	<input type="text"  name="lastname" placeholder="Last Name">
					</tr>
					<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td>	<input type="text" name="email" placeholder="Email Id">
						<td> 	<input type="text" name="mobile" placeholder="Mobile No">
					</tr>
					
					<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td>	<select name="gender"> <option> -- Sex -- </option> <option value="male"> Male </option> <option value="female"> Female </option> </select>
						<td> 	<input type="date" name="date" placeholder="appointment date">
					</tr>
					
						<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td colspan="2">	<textarea name="message" placeholder="Write your message here"> </textarea>
					</tr>
					
						<tr height="30px">
						
					</tr>
					<tr>
						<td width="500px"> </td>
						<td colspan="2">	<button name="submit"> SUBMIT </button>
					</tr>
					</form>
				</table>
				
		</div>
	</div>
	
	
	
	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">
						<font color="#000"> </font> <br> <br>


					

<br>
<br>
<br>
 </td>
					
					
					<td style="padding-left:20px;"> </td>
				</tr>
			
				
			</table>
		</div>
	</div>
	
	
	<div class="nav_down">
		<div>
		 &copy; 2018 All rights reserved. Hikma Specialist Hospital Graceland-Zaria
 		</div>
	</div>
	
</body>
</html>
<?php  
  
include("db_connection.php");
if(isset($_POST['submit']))  
{  
    $firstname=$_POST['firstname'];  
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile']; 
    $date=$_POST['date']; 
    $gender=$_POST['gender'];
    $message=$_POST['message'];
    if($firstname=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter Your firstname')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($lastname=='')  
    {  
        echo"<script>alert('Please enter your last name')</script>";  
exit();  
    }  
  
    if($email=='')  
    {  
        echo"<script>alert('Please enter Your email')</script>";  
    exit();  
    }  
    if($mobile=='')  
    {  
        echo"<script>alert('Please enter your mobile number')</script>";  
    exit();  
    }  
    if($date=='')  
    {  
        echo"<script>alert('Please enter the date')</script>";  
    exit();  
    }
    if($gender=='')  
    {  
        echo"<script>alert('Please enter Your gender')</script>";  
    exit();  
    }  
    if($message=='')  
    {  
        echo"<script>alert('Please enter Your message')</script>";  
    exit();  
    } 
    $check_email_query="select * from users WHERE email='$email'";  
    $run_query=mysqli_query($dbcon,$check_email_query); 
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
    $check_phone_query="select * from users WHERE phone='$phone'";  
    $run_query=mysqli_query($dbcon,$check_phone_query);  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Phone Number $phone is already exist in our database, Please try another one!')</script>";  
exit();  
    }  

    $insert_user="insert into admin (firstname,lastname,email,mobile,date,gender,message) VALUE ('$firstname','$lastname','$email','$mobile','$date','$gender','$message')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>alert('Appointment Successful!!!!')</script>";  
        echo"<script>window.open('index.html','_self')</script>"; 
    }  
  
  
  
}  
  
?>  
