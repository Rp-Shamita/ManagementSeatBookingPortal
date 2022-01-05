<?php
include 'config.php';

if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $passowrd = md5($_POST['password']);
  $cpassword = md5($_['cpassword']);

  if ($password == $cpassword){
    $sql = "INSERT INTO users (email, password)
            VALUES ('$email','password')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
      echo "<script>alert('Something went wrong!')</script>"
    }
  }
  else{
    echo "<script>alert('Password Not Matching')</script>"
  }
}

}

 ?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset = "utf-8">
   <title>Log in form</title>
   <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <div class="center">
     <h1>Sign Up</h1>
     <form action="" method="post">
       <div class="txt_field">
         <input type="email" name="email" required>
         <span></span>
         <label>Enter your email</label>
       </div>
       <div class="txt_field">
         <input type="password" name="password" required>
         <span></span>
         <label>Enter Password</label>
       </div>
       <div class="txt_field">
         <input type="password" name="cpassword" required>
         <span></span>
         <label>Confirm Password</label>
       </div>
       <button type="submit" class='btn'>Sign p</button>
       <div class="signup_link">
         Have an account? <a href='login.php'>Login here</a>
       </div>
     </form>
   </div>
 </body>
 </html>
