<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" type="text/css" href="css/style1.css">\
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <title>View Appointment</title>  
</head>  
  
<body>
<div class="navbar">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="about.html">ABOUT US</a></li>
<li><a href="service.html">OUR SERVICE</a></li>
<li><a href="Appointment.php">MAKE APPOINMENT</a></li>
<li><a href="contact.html">CONTACT US</a></li>
</ul>
</div>
    <p class="head"><b>LIST OF APPOINTMENT BY PATIENT</b></p>
    <table width="100%" border="0">  
        <thead>  
  
        <tr>  
  
            <th>Id</th>  
            <th>Firstname</th>  
            <th>Lastname</th>  
            <th>Email</th> 
            <th>Mobile No.</th> 
            <th>Gender</th>
            <th>Date</th>
            <th>Message</th>   
            <th>Delete User</th>  
        </tr>  
        </thead>  
  <?php  
        include("db_connection.php");  
        $view_users_query="select * from admin";
        $run=mysqli_query($dbcon,$view_users_query); 
  
        while($row=mysqli_fetch_array($run))
        {  
            $id=$row[0];  
            $firstname=$row[1];  
            $lastname=$row[2];  
            $email=$row[3];
            $mobile=$row[4];  
            $gender=$row[5];
            $date=$row[6];
            $message=$row[7];
        ?>  
  
        <tr>  
 
            <td><?php echo $id;  ?></td>  
            <td><?php echo $firstname;  ?></td>  
            <td><?php echo $lastname;  ?></td>  
            <td><?php echo $email;  ?></td> 
            <td><?php echo $mobile;  ?></td>  
            <td><?php echo $gender;  ?></td> 
            <td><?php echo $date;  ?></td> 
            <td><?php echo $message;  ?></td>  
            <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn1">Delete</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
</body>  
  
</html>
