<?PHP session_start();
if (isset($_SESSION['unique_id'])) {
  header("location:user.php");
}
?>
<?php   include("includes/header.php"); ?>
<body> 

<div class="wrapper">
<section class="form signup">
<header>Realtime chat App</header>
<form action="#" enctype="multipart/form-data">
<div class="error-text"></div>
<div class="name-details">
<div class="field input">
<label>First Name</label>
<input type="text"  name="fname" placeholder="First Name" required>
</div>

<div class="field input">
<label>Last  Name</label>
<input type="text"  name="lname" placeholder="Last Name" required>
</div>
</div>
<div class="field input">
<label>Email Address</label>
<input type="text"   name="email" placeholder=" Enter Your Email " required>
</div>

<div class="field input">
<label>Password</label>
<input type="password"   name="password" placeholder="Enter Your Password" required>
<i class="fas fa-eye"></i>
</div>

<div class="field  image">
<label>Select Image</label>
<input type="file"  name="image">
</div>

<div class="field button">
<input type="submit" value="Continue to chat">
</div>

</form>
<div class="link">Already Signed up ?<a href="login.php">Login now</a> </div>
</section>
</div> 
<script src="asset/login.js"></script> 
<script src="asset/password.js"></script>
<script src="asset/jquery.min.js"></script> 
<script src="asset/bootstrap.min.js"></script>
<script src="asset/popper.min.js"></script>
   
</body>
</html>