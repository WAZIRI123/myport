<?php   
session_start();
include("includes/header.php"); ?>
<body> 
<div class="wrapper">
<section class="chart-area">
<header>
   <a href="users.php" class="icon-back"><i class="fas fa-arrow-left"></i></a>
   <?php 
   include("backend/config.php");
   $user_id=mysqli_real_escape_string($conn,$_GET['user_id']);
   $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id='$user_id'");
   if (mysqli_num_rows ($sql)> 0) {
      ($rows=mysqli_fetch_assoc($sql));
   }
   ?>
<img src="images/<?php echo $rows['image'];?>" alt="">
<div class="details">
  <span><?php echo $rows['fname'].' '.$rows['lname'];?></span>
  <p><?php echo $rows['status'];?></p>
  </div>
</section>
</header>
<div class="chart-box">


</div>
<form action="" class="typing-area" >
<input type="text" name="i" value="<?php echo $user_id; ?> " hidden>
<input type="text" name="o" value="<?php echo $_SESSION['unique_id'];?> " hidden>
<input type="text" name="message" class="input-field" placeholder="type your message here..." >
<button> <i class="fab fa-telegram-plane"></i></button>
</form>
</div> 
<script src="asset/chart.js"></script> 
<script src="asset/jquery.min.js"></script> 
<script src="asset/bootstrap.min.js"></script>
<script src="asset/popper.min.js"></script>
</body>
</html>