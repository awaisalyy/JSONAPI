<?php
  
  $cmd=false;
  $msg="";

  if (isset($_POST["name"]))
  {
  include "dbconnection.inc";
 
  $name=$_POST["name"];
  $email=$_POST["email"];
  
  
  $query="INSERT INTO `customers` (`customerNumber`, `customerName`, `contactLastName`, `contactFirstName`, `phone`, `addressLine1`, `addressLine2`, `city`, `state`, `postalCode`, `country`, `salesRepEmployeeNumber`, `creditLimit`, `email`, `pwd`, `file`) VALUES ('', '$name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$email', NULL, NULL)";

  $cmd=mysqli_query($conn,$query);

  header("Location: customers.php");
  }
 
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Students</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="main-wrapper">
      <?php
        include "header.inc";
      ?>
       <?php
        include "sidebar.inc";
      ?>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Add Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                           <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form method="post">
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" name="name" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Id</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="form-control">
                                          <option>Select Gender</option>
                                          <option>Female</option>
                                          <option>Male</option>
                                          <option>Others</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Date of Birth</label>
                                       <div>
                                          <input type="date" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Class</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Religion</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Joining Date</label>
                                       <div>
                                          <input type="date" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mobile Number</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Admission Number</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Section</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Image</label>
                                       <input type="file" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Parent Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Name</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Occupation</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Mobile</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Email</label>
                                       <input type="email" name="email" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Name</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Occupation</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Mobile</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mother's Email</label>
                                       <input type="email" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Present Address</label>
                                       <textarea class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Permanent Address</label>
                                       <textarea class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>