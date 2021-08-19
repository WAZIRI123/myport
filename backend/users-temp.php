 <?php 
 while ($rows=mysqli_fetch_assoc($sql) ) {
$sql2="SELECT * FROM messages WHERE  (o_id ={$rows['unique_id']} OR in_id = {$rows['unique_id']}) AND (o_id=$o_id OR in_id=$o_id)
ORDER BY msg_id  DESC LIMIT 1 ";
$result2=mysqli_query($conn,$sql2);
$rows2=mysqli_fetch_assoc($result2);
if (mysqli_num_rows($result2) > 0) {
   # code...
   $result3=$rows2['msg'];
  
}else {
   # code...
   $result3="no message available yet";
}

 (strlen($result3) >28) ? $msg=substr($result3,0,6).'...': $msg=$result3;
   ($rows2['o_id']==$o_id) ? $you= "you:" : $you="";
   ($rows['status']=="offline now") ?   $offline="offline"  :   $offline="";
    $output .=' <a href="chart.php? user_id='.$rows['unique_id'].'">
<div class="content">
<img src="./images/'. $rows['image'] .' " alt="">
<div class="details">
<span>'.$rows['fname']."  ". $rows['lname'].' </span>
<p>'.$you.''.$msg.'</p>
</div>
</div>
<div class="status-dot '.$offline.' "> <i class="fas fa-circle"></i></div>
  </a>';
  }
  ?>