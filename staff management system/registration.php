<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.css">  
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>Registration</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 10px;  
  
</style>  
<body>  
   <table border="0" class="table" align="center" bgcolor="lightgreen">
<tr>
<td align="center" width="10%"><img src="images/nilestu.png"></td>
<td ><font size="5" color="#333" face="verdana"><b>Staff Personal Record and Management System</b></font></td>
</tr>
</table>
<div class="navbar">
<ul class="ul">
<li><a href="Home.html">Home</a></li>
<li><a href="view_users.php">View Users</a></li>
<li><a href="registration.php">Register Staff</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="First name" name="name" type="text" autofocus>  
                            </div> 
                             <div class="form-group">  
                                <input class="form-control" placeholder="Second name" name="sname" type="text" autofocus>  
                            </div>  
                             <div class="form-group">
                             <label>Date Of Birth</label>  
                                <input class="form-control" placeholder="Date of Birth" name="date" type="date" autofocus>  
                            </div>   
                                <div class="form-group">
                                    <label>Department:</label>
                                    <select name="dep" class="edit">
                                    <option value = ComputerScience Selected>Computer Science</option>
                                    <option value = Polymer>Polymer</option>
                                    <option value = S.L.T>S.L.T</option>
                                    <option value = "Production Management">Production Management</option>
                                    <option value = "Leather Technology">Leather Technology</option>
                                    <option value = "Footwear Manufacturing">Footwear Manufacturing</option>
                                    <option value = "Enviromental Technology">Enviromental Technology</option>
                                    <option value = DICPT>DICPT</option>
                                    </select>
                                </div>
                                <div class="form-group"> 
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">
                                <input class="form-control" placeholder="State of Origin" name="soo" type="text" autofocus>
                            </div>  
                                <div class="form-group">
                                    <p><label>Marital Status:</label>
                                    <select name="ms" class="edit">
                                    <option value = Single Selected>Single</option>
                                    <option value = Married>Married</option>
                                    <option value = Divorced>Divorced</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p><label>Office Post:</label>
                                    <select name="post" class="edit">
                                    <option value = H.O.D>H.O.D</option>
                                    <option value = Dean>Dean</option>
                                    <option value = "Lab Technician">Lab Technician</option>
                                    <option value = Lecturer>Lecturer</option>
                                    <option value = "Exam Officer">Exam Officer</option>
                                    </select>
                                </div>
  
                                <div class="form-group">
                             <label>Date Of Entry</label> 
                                <input class="form-control" placeholder="Date of Entry" name="doe" type="date" autofocus>  
                            </div>
                            <div class="form-group">
                                    <label>Qualification:</label>
                                    <select name="qualification">
                                    <option value = Professor>Professor</option>
                                    <option value = Phd>Phd</option>
                                    <option value = Degree>Degree</option>
                                    <option value = H.N.D>H.N.D</option>
                                    <option value = Diploma>Diploma</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="sex">
                                    <option value = Male Selected>Male</option>
                                    <option value = Female>Female</option>
                                    </select>
                                </div>
                                <div class="form-group"> 
                                <input class="form-control" placeholder="Enter Phone Number" name="phone" type="telephone" autofocus>  
                            </div> 
                            <div class="form-group">
                                    <label>Religion</label>
                                    <select name="religion">
                                    <option value = Christianity Selected>Christianity</option>
                                    <option value = Muslim >Muslim</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <select name="nation">
                                    <option value = Nigerian Selected>Nigerian</option>
                                    <option value = ghanian>Ghanian</option>
                                    <option value = kenyan>Kenyan</option>
                                    <option value = "South African">South African</option>
                                    <option value = Other>Other</option>
                                    </select>
                                </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>    
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<?php  
  
include("db_connection.php");
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];  
    $user_sname=$_POST['sname'];
    $user_date=$_POST['date'];
    $user_dep=$_POST['dep']; 
    $user_email=$_POST['email']; 
    $user_soo=$_POST['soo'];
    $user_ms=$_POST['ms'];
    $user_post=$_POST['post'];
    $user_doe=$_POST['doe'];
    $user_qualification=$_POST['qualification'];
    $user_sex=$_POST['sex'];
    $user_phone=$_POST['phone'];
    $user_religion=$_POST['religion'];
    $user_nation=$_POST['nation'];
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_sname=='')  
    {  
        echo"<script>alert('Please enter second name')</script>";  
exit();  
    }  
  
    if($user_date=='')  
    {  
        echo"<script>alert('Please enter the date')</script>";  
    exit();  
    }  
    if($user_dep=='')  
    {  
        echo"<script>alert('Please enter Department')</script>";  
    exit();  
    }  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    } 
    if($user_soo=='')  
    {  
        echo"<script>alert('Please enter the State of Origin')</script>";  
    exit();  
    } if($user_ms=='')  
    {  
        echo"<script>alert('Please enter the Marital Status')</script>";  
    exit();  
    } if($user_post=='')  
    {  
        echo"<script>alert('Please enter the Office Post')</script>";  
    exit();  
    } if($user_doe=='')  
    {  
        echo"<script>alert('Please enter the Date of Entry')</script>";  
    exit();  
    } if($user_qualification=='')  
    {  
        echo"<script>alert('Please enter the Qualification')</script>";  
    exit();  
    } if($user_sex=='')  
    {  
        echo"<script>alert('Please enter the Gender')</script>";  
    exit();  
    } if($user_phone=='')  
    {  
        echo"<script>alert('Please enter the Phone Number')</script>";  
    exit();  
    }  
    if($user_religion=='')  
    {  
        echo"<script>alert('Please enter the Religion')</script>";  
    exit();  
    }  
    if($user_nation=='')  
    {  
        echo"<script>alert('Please enter the Nationality')</script>";  
    exit();  
    }  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query); 
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
    $check_phone_query="select * from users WHERE user_phone='$user_phone'";  
    $run_query=mysqli_query($dbcon,$check_phone_query);  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Phone Number $user_phone is already exist in our database, Please try another one!')</script>";  
exit();  
    }  

    $insert_user="insert into users (user_name,user_sname,user_date,user_dep,user_email,user_soo,user_ms,user_post,user_doe,user_qualification,user_sex,user_phone,user_religion,user_nation) VALUE ('$user_name','$user_sname','$user_date','$user_dep','$user_email','$user_soo','$user_ms','$user_post','$user_doe','$user_qualification','$user_sex','$user_phone','$user_religion','$user_nation')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>alert('Registration Successful!!!!')</script>";  
        echo"<script>window.open('view_users.php','_self')</script>"; 
    }  
  
  
  
}  
  
?>  
