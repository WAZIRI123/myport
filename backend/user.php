<?php 
session_start();
include("config.php");
$o_id=$_SESSION['unique_id'];
$sql=mysqli_query($conn,"SELECT * FROM users WHERE  NOT unique_id= $o_id ");
$output="";
if (mysqli_num_rows($sql)==1) {
   $output.="no users to chat with";
}
elseif (mysqli_num_rows($sql)> 0) 
{
  
 include("users-temp.php");
   
}
echo $output;
?>