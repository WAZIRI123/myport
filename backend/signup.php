<?php 
session_start();
include_once("config.php");
$fname=mysqli_real_escape_string($conn,$_POST['fname']) ;
$lname=mysqli_real_escape_string($conn,$_POST['lname']) ;
$email=mysqli_real_escape_string($conn,$_POST['email']) ;
$password=mysqli_real_escape_string($conn,$_POST ['password']) ;


if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ) {
   # code...
   if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
      # code...
   } else {
     echo "email is not valid";
     die();
   }
   //check if email already exist
   $sql=mysqli_query($conn, "SELECT  email FROM users WHERE email='$email' ");
   if (mysqli_num_rows($sql)>0) {
      # code...
   echo" $email -already existed";
  
   } 
   else {
      //check if fiel uploaded
      if (isset($_FILES['image'])) {
         # code...
      
          $img_type=$_FILES['image']['name'];
         $img_name=$_FILES['image']['tmp_name'];
         $exploade=explode('.',$img_type);
         $extension=end($exploade);
         $extre=['jpg','PNG','jepg'];
         if (in_array($extension, $extre) === true) {
           $time=time();
           $new_imagename=$time. $img_type;
           if (move_uploaded_file( $img_name,'../images/'.$new_imagename)) {
              # code...
              $rand=rand(time(),10000000);
              $unique=$rand;
              $status="active now";
              $sql2=mysqli_query($conn,"INSERT INTO users(fname,lname,password,image,status,email,unique_id)
              Values('$fname','$lname','$password','$new_imagename','$status','$email',$unique)");
              if ($sql2) {
                 # code...
                 $sql3=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
                 if (mysqli_num_rows($sql3)>0) {
                    # code...
                    $rows=mysqli_fetch_assoc($sql3);
                    $_SESSION['unique_id']=$rows['unique_id'];
                    echo "success";
                 }else {
                    echo"something went wrong";
                 }
        
              }

           } else {
              # code...
           }
            
         } else {
            # code...
             echo "please upload img with jpg,png or jepg extension";
         }
         
      } else {
         # code...
         echo "please upload file";
      }
      
   }
   
   
} 
else {
 echo"all input are required!";
}

?>