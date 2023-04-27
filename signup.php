<?php
session_start();
require_once "dbconnect.php";
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post" action="" id="signup">

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" name="user_name" id="username" class="form-control form-control-lg"  placeholder="Enter Full Name"/>
                  
                  <span style="color: red;" id="name-error"></span>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="text" id="useremail" name="user_email" class="form-control form-control-lg" pattern="[a-z 0-9]{2,20}@gmail.com"  placeholder="Enter Email"/>
                  <span style="color: red;" id="email-error"></span>
                  <?php 
                  if(isset($_POST['submit'])){
                  $name=$_POST['user_name'];
                  $email=$_POST['user_email'];
                  $pass=$_POST['user_password'];
                  $phone=$_POST['user_phone'];
                  $query="SELECT * FROM user WHERE user_email='$email'";
                  $result=mysqli_query($con,$query);
                  $count=mysqli_num_rows($result);
                  if($count>0){
                    echo '<p style="color: red;">Email is Already existing</p>';
                  }
                  else{
                    $query1="INSERT INTO user (user_name,user_email,user_password,user_phone) VALUES ('$name','$email','$pass','$phone')";
                    $result=mysqli_query($con,$query1); 
                    header("location:mainpage.php");
                  }
                  }
                  ?>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Phone Number</label>
                  <input type="text" id="userphone" name="user_phone" class="form-control form-control-lg" pattern="[0-9]{10}"  placeholder="Enter 10 Digits Phone Number"/>
                  <span style="color: red;" id="phone-error"></span>
                </div>


                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="userpassword" name="user_password" class="form-control form-control-lg" placeholder="Enter Password"/>
                  <span style="color: red;" id="pass-error"></span>
                  
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" id="userrepassword" class="form-control form-control-lg" placeholder="Confirm Password"/>
                  <span style="color: red;" class="repass-error" id="repass-error"></span>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="agreeterms" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                 </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" value="Register" id="submit" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>

var username= document.getElementById("username");
var useremail= document.getElementById("useremail");
var userpass= document.getElementById("userpassword");
var userphone= document.getElementById("userphone");

var repass=document.getElementById("userrepassword");
var agreeterms= document.getElementById("agreeterms");



document.getElementById("signup").onsubmit=function(e){

if(username.value==false||username.value==""){
    e.preventDefault();
    document.getElementById("name-error").innerHTML="This Field Cannot be left Blank";
}


if(useremail.value==false||useremail.value==""){
    e.preventDefault();
    document.getElementById("email-error").innerHTML="Enter Email";
}


if(userpass.value==false||userpass.value==""){
    e.preventDefault();
    document.getElementById("pass-error").innerHTML="Create Password";
}

if(userpass.value===repass.value){
    
    document.getElementById("repass-error").innerHTML="PASSWORD MATCHED";
}
else{
    e.preventDefault();
    document.getElementById("repass-error").innerHTML="PASSWORD DO NOT MATCHED";
}

if(userphone.value==false || userphone.value==""){
    e.preventDefault();
    document.getElementById("phone-error").innerHTML="Enter Valid Phone Number";
}

if(agreeterms.checked==false){
    e.preventDefault();
    alert("Agree Terms And Conditions To Continue");
}

}
</script>
</body>
</html>