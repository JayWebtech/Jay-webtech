<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.css"> 
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>
  <table border="0" width="130%" align="center" bgcolor="lightgreen">
<tr>
<td align="center" width="10%"><img src="images/nilestu.png"></td>
<td ><font size="5" color="#333" face="verdana"><b>Staff Personal Record and Management System</b></font></td>
</tr>
</table>
<div class="navbar">
<ul>
<li><a href="Home.html">Home</a></li>
<li><a href="registration.php">Register Staff</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
  
<div class="table-scrol">  
    <h1 align="center">Staff Database</h1>  
  
<div class="">
  
  
    <table width="100%" class="table table-bordered table-hover table-striped" >  
        <thead>  
  
        <tr>  
  
            <th>Staff Id</th>  
            <th>Staff Firstname</th>  
            <th>Staff Secondname</th>  
            <th>Staff Date of birth</th> 
            <th>Staff Department</th> 
            <th>Staff E-mail</th>
            <th>Staff State of Origin</th>
            <th>Staff Marital Status</th>
            <th>Staff Office Post</th>   
            <th>Staff Date of Entry</th>  
            <th>Staff Qualification</th>  
            <th>Staff Gender</th>  
            <th>Staff Phone</th>
             <th>Staff Religion</th>
             <th>Staff Nationality</th> 
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("db_connection.php");  
        $view_users_query="select * from users";
        $run=mysqli_query($dbcon,$view_users_query); 
  
        while($row=mysqli_fetch_array($run))
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_sname=$row[2];  
            $user_date=$row[3];
            $user_dep=$row[4];  
            $user_email=$row[5];
            $user_soo=$row[6];
            $user_ms=$row[7];
            $user_post=$row[8];
            $user_doe=$row[9];
            $user_qualification=$row[10];
            $user_sex=$row[11];
            $user_phone=$row[12]; 
            $user_religion=$row[13];
            $user_nation=$row[14];
  
        ?>  
  
        <tr>  
 
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_sname;  ?></td>  
            <td><?php echo $user_date;  ?></td> 
            <td><?php echo $user_dep;  ?></td>  
            <td><?php echo $user_email;  ?></td> 
            <td><?php echo $user_soo;  ?></td>  
            <td><?php echo $user_ms;  ?></td> 
            <td><?php echo $user_post;  ?></td> 
            <td><?php echo $user_doe;  ?></td> 
            <td><?php echo $user_qualification;  ?></td> 
            <td><?php echo $user_sex;  ?></td> 
            <td><?php echo $user_phone;  ?></td> 
            <td><?php echo $user_religion; ?></td>
            <td><?php echo $user_nation; ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  <a href="home.html"><button class="btn"><< Go back</button></a>
  
</body>  
  
</html>
