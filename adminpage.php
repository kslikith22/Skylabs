<?php
session_start();
require_once "dbconnect.php";
if(isset($_POST['submit'])){
  if(isset($_POST['admin_email']) && isset($_POST['admin_password'])){
    $email=$_POST['admin_email'];
    $password=$_POST['admin_password'];
    $query="SELECT admin_email,admin_password FROM admin WHERE admin_email='$email' AND admin_password='$password'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
      if($count>0){
      header("location:adminmainpage.php");
      }
      else{
        echo "login failed";
      }
    }
  }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="favcon.png">
    
    
</head>
<body style="background-image: url('https://media.istockphoto.com/id/1251629816/photo/the-perfect-setting-to-complete-work.jpg?b=1&s=170667a&w=0&k=20&c=e8mSv3z6PhT18EUmzgtdMCbQecYzhHoqu_ts8tFdN6c=');">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <form  method="post" id="login">
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Admin Login</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeEmailX">Admin email</label>
                      <input type="email"  id="email" name="admin_email" class="form-control form-control-lg" placeholder="Enter Email" />
                      </div>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX">Password</label>
                      <input type="password" id="password" name="admin_password" class="form-control form-control-lg" placeholder="Enter Password" />
                      <?php
                      require_once "dbconnect.php";
                      if(isset($_POST['submit'])){
                         if(isset($_POST['admin_email']) && isset($_POST['admin_password'])){
                          $email=$_POST['admin_email'];
                           $password=$_POST['admin_password'];
                           $query="SELECT admin_email,admin_password FROM admin WHERE admin_email='$email' AND admin_password='$password'";
                           $result=mysqli_query($con,$query);
                           $count=mysqli_num_rows($result);
                                   if($count>0){
                                       header("location:adminmainpage.php");
                                   }
                                      else{
                                        echo '<p style="color: red;">Account Does Not Exist </p>';
                                    }
                                  }
                                }




?>  
                    </div>
      
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
      
                    <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Login" name="submit">
                  </form></div>
                 <a href="startpage.php"><button class="btn btn-outline-light btn-lg px-5" type="submit">Home</button></a><br>
                    
              </div>
            </div>
          </div>
        </div>
        
      </section>
</body>
</html>