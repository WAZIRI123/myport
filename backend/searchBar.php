<?php 
session_start();
include "config.php";
$o_id=$_SESSION['unique_id'];
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$output="";
$sql=mysqli_query($conn,"SELECT * FROM users WHERE NOT unique_id= $o_id AND fname LIKE '%{$searchTerm }%' OR lname LIKE '%{$searchTerm }%' ");
if (mysqli_num_rows ($sql) > 0 ) {
 
     # code...
           include("users-temp.php");

} 
else {
  $output.="no user found related to search keyword";
}
echo $output;

?>