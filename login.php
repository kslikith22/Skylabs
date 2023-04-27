<?php
session_start();
require_once "dbconnect.php";

if(isset($_POST['submit'])){
  if(isset($_POST['user_email']) && isset($_POST['user_password']))
  $email=$_POST['user_email'];
  $password=$_POST['user_password'];
  
  $query="SELECT user_email,user_password FROM user WHERE user_email='$email' AND user_password='$password'";
  $result=mysqli_query($con,$query);
  $count=mysqli_num_rows($result);
  if($count > 0){
    header("location:mainpage.php");  
  }
  else{
    echo "";
  }
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="skylabs.png">
     <link rel="stylesheet" href="style.css">
  </head>
<body>
  <br><br>
  <center><h1 class="fw-bold mb-2 text-uppercase">Client login</h1></center>
  <a class="movbtn" href="signup.php"><button type="button" class="btn btn-primary btn-lg"
    style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign up</button>
      </a>

  <br><br><br><br>  
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="" method="post" id="login">
              <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="email" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="user_email" pattern="[a-z 0-9]{2,20}@gmail.com" />
                  <label class="form-label" for="form3Example3"></label>
                  <p id="email-error" style="color: red;"></p>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" class="form-control form-control-lg"
                    placeholder="Enter password" name="user_password" />
                  <label class="form-label" for="form3Example4"></label>
                  <span style="color: red;" id="pass-error"></span>
                  <?php
                  if(isset($_POST['submit'])){
                  if(isset($_POST['user_email']) && isset($_POST['user_password']))
                  $email=$_POST['user_email'];
                  $password=$_POST['user_password'];
                  $query="SELECT user_email,user_password FROM user WHERE user_email='$email' AND user_password='$password'";
                  $result=mysqli_query($con,$query);
                  $count=mysqli_num_rows($result);
                  if($count > 0){
                  header("location:mainpage.php");  
                  }
                  else{
                   echo '<p style="color: red;">Account Does Not Exist </p>';
                   echo '<p style="color: red;">Create New Account On Signup Page </p>';
                  }
                  }
                  ?>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="forgotpassword.php" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <input type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;" id="login" name="submit" value="Login">
                    <a href="adminpage.php"><button type="button" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Admin</button></a>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
       <script>
        document.getElementById("login").onsubmit=function(e){
          var useremail= document.getElementById("email");
          var userpass= document.getElementById("password");

          if(useremail.value==false||useremail.value==""){
        e.preventDefault();
        document.getElementById("email-error").innerHTML="Enter Email";
        }
        if(userpass.value==false||userpass.value==""){
         e.preventDefault();
         document.getElementById("pass-error").innerHTML="Enter Password";
        } 

        }


       </script>
  
</body>
</html>