
<?PHP session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}?>
<?php   include("includes/header.php"); ?>
<body> 

<div class="wrapper">
<section class="form signup">
<header>Realtime chat App</header>
<form action="#">
<div class="error-text">This is an erro message</div>

<div class="field input">
<label>Email Address</label>
<input type="text" name="email" placeholder=" Enter Your Email ">
</div>

<div class="field input">
<label>Password</label>
<input type="password" name="password" placeholder="Enter Your Password">
<i class="fas fa-eye"></i>
</div>

<div class="field button">
<input type="submit"  name="btn"   value="Continue to chat">
</div>
</form>
<div class="link">Not yet signed up ?<a href="index.php">signup now</a> </div>
</section>
</div>
<script src="asset/login1.js"></script> 
<script src="asset/password.js"></script>
<script src="asset/jquery.min.js"></script> 
<script src="asset/bootstrap.min.js"></script>
<script src="asset/popper.min.js"></script>
   
</body>
</html>