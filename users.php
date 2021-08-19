<?php 
session_start();
if(!isset( $_SESSION['unique_id'])) {
  header("location: login.php"); 
}
?>

<?php
include("backend/config.php");
include("includes/header.php");
$sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows ($sql) >0 )
 {
$rows=mysqli_fetch_assoc($sql);

}

?>
<body> 
<div class="wrapper">
<section class="users">
<header>
<div class="content">
<img src="images/<?php  echo $rows['image'] ?>">
<div class="details">
<span><?php  echo $rows['fname']."  ". $rows['lname'] ;?></span>
<p><?php  echo $rows['status']?></p>
</div>
</div>
<a href="backend/logout.php ? $logout_id=<?php echo $rows['unique_id'] ;?> "  name="logout" class="logout"> logout</a>
</header>
<div class="search">
<span>select an user to start chart with</span>
<input type="text" placeholder="enter name to search...">
<button> <i class="fas fa-search"></i></button>
</div>
<div class="users-list">

</div>

</section>
</div> 
<script src="asset/user.js"></script> 
<script src="asset/jquery.min.js"></script> 
<script src="asset/bootstrap.min.js"></script>
<script src="asset/popper.min.js"></script>
</body>
</html>