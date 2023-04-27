<?php

require_once "dbconnect.php";
if(isset($_POST['submit'])){
    if(isset($_POST['user_email']) && isset($_POST['user_password']) && isset($_POST['user_phone'])){
        $email=$_POST['user_email'];
        $password = $_POST['user_password'];
        $phone=$_POST['user_phone'];
        $repass=$_POST['user_repassword'];
        $query = "UPDATE user SET user_password = '$repass' where user_email='$email'";
        mysqli_query($con,$query);
    }
}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="skylabs.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style type="text/css">
        .container{
            width: 500px;
            background-color: rgb(196, 227, 217);
            border-color: blue;
            margin-top: 150px;
            border: 2px solid;
            border-radius: 10px;
            padding: 20px;
        }
        
        .btn:hover {
            color: aqua;
            

        }
        body{
            background-image: url("https://media0.giphy.com/media/IgLIVXrBcID9cExa6r/giphy.gif?cid=ecf05e4743k2aqdr3catbb73tfvm7puck4ev1yhm12351w3y&rid=giphy.gif&ct=g");
        }
    </style>
</head>
<body >
    <div  class="container">
    <form   method="post" id="reset">
        <div class="mb-3">
            <label>Enter Registered Email:</label><br>
            <input class="form-control" type="text" id="useremail" pattern="[a-z 0-9]{2,20}@gmail.com"  name="user_email" placeholder="enter email"><br>
            <span style="color: red;" id="email-error"></span>
        </div>
        <div class="mb-3">
        <label>Enter Registered Phone Number:</label><br>
        <input class="form-control" type="text" pattern="[0-9]{10}"  id="userphone" name="user_phone" placeholder="enter phone Number"><br>
        <span style="color: red;" id="phone-error"></span>
        </div>
        <div class="mb-3">
        <label>Enter new password</label><br>
        <input class="form-control" type="password"  id="userpassword"  name="user_password" placeholder="Set a strong password"><br>
        <span style="color: red;" id="pass-error"></span>
        </div>
       <div class="mb-3"> <label>Confirm Password</label><br>
        <input class="form-control" type="password" id="userrepassword"  name="user_repassword"  placeholder="Reenter the above password"><br>
        <span style="color: red;" id="repass-error"></span>
        </div>
        <div>
     <center><input  class="btn btn-primary" style="margin-left: 1.5%;" type="submit" name="submit"  value="confirm"><br></div></center>
        </form>
</div> 
 <script>
    document.getElementById("reset").onsubmit=function(e){
        var useremail= document.getElementById("useremail");
var userpass= document.getElementById("userpassword");
var userphone= document.getElementById("userphone");
var repass=document.getElementById("userrepassword");
    

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
if(repass.value==""){
    document.getElementById("repass-error").innerHTML="This is required section";
}
if(userphone.value==false || userphone.value==""){
    e.preventDefault();
    document.getElementById("phone-error").innerHTML="Enter Valid Phone Number";
}



}
 </script>
</body>
</html>