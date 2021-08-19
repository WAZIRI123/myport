<?php
session_start();
 include "config.php"; 
if (isset($_SESSION['unique_id'])) {
  
   $o=$_SESSION['unique_id'];
 $i=mysqli_real_escape_string($conn,$_POST['i']);
  $output="";
 $sql="SELECT * FROM messages JOIN users ON users.unique_id=messages.o_id WHERE (o_id = {$o} && in_id= {$i}) OR (o_id = {$i} && in_id= {$o}) ORDER BY msg_id " ;
 $result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row=mysqli_fetch_assoc($result)) {
   # code...

if($row ['o_id'] === $o ) {
      # sender        
  $output .='
<div class="incoming-message">
   <div class="details">
<p> '.$row['msg'].' </p>
</div>
</div>
';
}
   else{
      # receiver...
         $output .='<div class="outgoing-message">
   <img src="images/'.$row['image'].'" alt="">
<div class="details">
<p> '.$row['msg'].' </p>
</div>
</div>';  
   } 

}

}
echo $output;
}
else {
   header("location: ../login.php");
}

?>