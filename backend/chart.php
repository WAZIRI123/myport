<?php 
session_start();
include("config.php");
if (isset($_SESSION['unique_id'])) {
   $o=mysqli_real_escape_string($conn, $_POST['o']);
 $i=mysqli_real_escape_string($conn, $_POST['i']);
 $message=mysqli_real_escape_string($conn,$_POST['message']);

if (!empty($message)) {
 $sql=mysqli_query($conn, "INSERT INTO messages(in_id, o_id, msg)
 Values($i, $o,'$message')") or die() ; 
}


} 

else {
  header(" ../login.php");
}



?>