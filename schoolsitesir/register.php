<?php
  
  $cmd=false;
  $msg="";

  if (isset($_POST["name"]))
  {
  include "dbconnection.inc";
  session_start();

  $scode=$_SESSION["security_code"];
  $code=$_POST["code"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $pwd=md5($_POST["pwd"]);
  
  if ($scode==$code)
  {
  $query="INSERT INTO `customers` (`customerNumber`, `customerName`, `contactLastName`, `contactFirstName`, `phone`, `addressLine1`, `addressLine2`, `city`, `state`, `postalCode`, `country`, `salesRepEmployeeNumber`, `creditLimit`, `email`, `pwd`, `file`) VALUES ('', '$name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$email', '$pwd', NULL)";

  $cmd=mysqli_query($conn,$query);

  header("Location: thanks.php");
  }
  else
  {
    $msg="Invalid Captcha code";
  }  
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Register</title>

<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<script src="JS/code.jquery.com_jquery-2.1.1.min.js" type="text/javascript"></script>


<link rel="stylesheet" href="assets/css/style.css">
<script>
  function validate()
  {
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var pwd=document.getElementById("pwd").value;
    var cpwd=document.getElementById("cpwd").value;

    var regex=/^[A-Za-z]{3,50}$/;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var pwdLength = /^.{4,10}$/;
    var pwdUpper = /[A-Z]+/;
    var pwdLower = /[a-z]+/;
    var pwdNumber = /[0-9]+/;
    var pwdSpecial = /[!@#$%^&()'[\]"?+-/*={}.,;:_]+/;

    if (name.length==0)
    {
      alert("Name must be entered");
      document.getElementById("name").focus();
      return false;
    }
    else if(!regex.test(name))
    {
      alert("Name must be in alpha from 3 to 50 chracter");
      document.getElementById("name").focus();
      return false;
    }
    else if (email.length==0)
    {
      alert("email must be entered");
      document.getElementById("email").focus();
      return false;
    }
    else if(!emailReg.test(email))
    {
      alert("Email must be in proper format");
      document.getElementById("email").focus();
      return false;
    }
    else if (pwd.length==0)
    {
      alert("password must be entered");
      document.getElementById("pwd").focus();
      return false;
    }
    else if(!pwdLength.test(pwd))
    {
      alert("Password must 4 to 10 character long");
      document.getElementById("pwd").focus();
      return false;
    }
    else if (pwd!=cpwd)
    {
      alert("password and confirm password must be same");
      document.getElementById("pwd").focus();
      return false;
    }
    else
    {
    //alert("Your registration has been completed plz sign in");
    return true;
    }
  }

  function referesh()
  {
    $("#captcha").attr("src","CaptchaImages.php");
  }
</script>

</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Register</h1>
<p class="account-subtitle">
    Access to our dashboard
    <span style="color: green;">
    <?php
      if ($cmd==true)
      {
        print("<br/> Your registration has been completed plz sigin");
      }

      print("$msg");
    ?>
    </span>
</p>

<form method="post" onsubmit="return(validate())">
<div class="form-group">
<input class="form-control" id="name" type="text" placeholder="Name" name="name">
</div>
<div class="form-group">
<input class="form-control" id="email" type="text" placeholder="Email" name="email">
</div>
<div class="form-group">
<input class="form-control" id="pwd" type="password" placeholder="Password" name="pwd">
</div>
<div class="form-group">
<input class="form-control" id="cpwd" type="password" placeholder="Confirm Password" name="cpwd">
</div>
<div class="form-group">
<input class="form-control" id="code" type="text" placeholder="Captcha Code" name="code">
</div>
<div class="form-group">
<img id="captcha" src="CaptchaImages.php" width="300px" height="80px">
</div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="button" onclick="referesh()">Referesh</button>
</div>
<br>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Register</button>
</div>
</form>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login">
<span>Register with</span>
<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
</div>

<div class="text-center dont-have">Already have an account? <a href="login.html">Login</a></div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
</html>