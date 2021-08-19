<?php 
$conn=mysqli_connect("localhost","root","","chart");
if ($conn==true) {
 
} else {
  echo "database not connected"."  :   ".mysqli_connect_error();
}

?>