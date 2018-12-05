<?php  

include("db_connection.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from admin WHERE id='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{    
    echo "<script>window.open('view_appointment.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>
