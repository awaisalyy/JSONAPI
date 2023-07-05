<?php
  $msg="";
  //Check web site cookies
  if (isset($_COOKIE["username"]))
  {
   header("Location: dashboard.php");
  }

  if (isset($_POST["email"]))
  {
   $email=$_POST["email"];
   $pwd=md5($_POST["pwd"]);

   if (isset($_POST["remember"]))
   {
      $remember="Y";
   }
   else
   {
      $remember="N";
   }

   include "dbconnection.inc";

   $query="SELECT COUNT(*) FROM `customers` WHERE `email`='$email' and `pwd`='$pwd'";
   $cmd=mysqli_query($conn,$query);
   $row=mysqli_fetch_row($cmd);

   $noofrec=$row[0];

   if ($noofrec>0)
   {
      session_start();

      $query1="SELECT * FROM `customers` WHERE `email`='$email' and `pwd`='$pwd'";
      $cmd1=mysqli_query($conn,$query1);
      $row1=mysqli_fetch_row($cmd1);
      
      $_SESSION["ID"]=$row1[0];
      $_SESSION["NAME"]=$row1[1];
      $_SESSION["EMAIL"]=$row1[13];

      $type=$row1[16];
      
      if ($type=="M")
      {
         $_SESSION["TYPE"]="Member";
      }
      else
      {
         $_SESSION["TYPE"]="Administrator";
      }

      if ($remember=="Y")
      {
     
       /* Set cookie to last 1 year */
       setcookie("username",$email,time()+3600); 
       setcookie("password",$pwd,time()+3600); 
      }
      else
      {
         $msg="Valid login with out remember";
      }
     
      if ($type=="M")
      header("Location: dashboard.php");
      else if($type=="A")
      header("Location: admindashboard.php");

   }
   else
   {
      $msg="In Valid login";
   }

  }

?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Login</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
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
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard
                        <br>
                        <?php
                          print("$msg");
                        ?>
                        </p>
                        <form method="post">
                           <div class="form-group">
                              <input class="form-control" name="email" type="text" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <input class="form-control" name="pwd" type="password" placeholder="Password">
                           </div>
                           <div class="form-group">
                              <div class="checkbox">
                              <label>
                              <input type="checkbox" name="remember" value="Y"> Remember Me
                              </label>
                              </div>
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit">Login</button>
                           </div>
                        </form>
                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">or</span>
                        </div>
                        <div class="social-login">
                           <span>Login with</span>
                           <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>
                        <div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
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
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:40 GMT -->
</html>