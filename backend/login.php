<?php 
session_start();
include_once("config.php");
$email=mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn, $_POST['password']);
if (!empty ($email) && !empty($password)) {
   # code...
   $sql=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");
   if(mysqli_num_rows($sql) > 0) {
       $rows=mysqli_fetch_assoc($sql);
       $status="active now";
 $sql2=mysqli_query($conn, "UPDATE users SET status='$status' WHERE unique_id = {$rows['unique_id']}");
  
    if ($sql2) {
     $_SESSION['unique_id']=$rows['unique_id'];
                    echo "success";
    }

   } else {
     echo "email or password didnt match!!";
   }
   
} else {
   echo "please enter your email and password to login";
}


?>