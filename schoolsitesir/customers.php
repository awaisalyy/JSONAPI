<?php
   include "dbconnection.inc";
   $name="";

   if (isset($_GET["name"]))
   {
      $name=$_GET["name"];
   }
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Students</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
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
                        <h3 class="page-title">Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Customers</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="customersdownload.php" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a>
                        <a href="add-customer.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card card-table">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0 datatable">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Address</th>
                                       <th>Country</th>
                                       <th>Mobile Number</th>
                                       <th>City</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $query="SELECT * FROM `customers` 
                                    WHERE `customerName` like '%$name%'";

                                    $cmd=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_row($cmd))
                                    print("
                                    <tr>
                                    <td>$row[0]</td>
                                    <td>
                                       <h2 class='table-avatar'>
                                          <a href='customer-details.php?id=$row[0]' class='avatar avatar-sm mr-2'><img class='avatar-img rounded-circle' src='assets/img/profiles/avatar-01.jpg' alt='User Image'></a>
                                          <a href='customer-details.php?id=$row[0]'>$row[1]</a>
                                       </h2>
                                    </td>
                                    <td>$row[13]</td>
                                    <td>$row[5]</td>
                                    <td>$row[10]</td>
                                    <td>$row[4]</td>
                                    <td>$row[7]</td>
                                    <td class='text-right'>
                                       <div class='actions'>
                                          <a href='edit-customer.php?id=$row[0]' class='btn btn-sm bg-success-light mr-2'>
                                          <i class='fas fa-pen'></i>
                                          </a>
                                          <a href='#' class='btn btn-sm bg-danger-light'>
                                          <i class='fas fa-trash'></i>
                                          </a>
                                       </div>
                                    </td>
                                 </tr>");

                                    ?>
                                   
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <p>Copyright © 2023 APTECH.</p>
            </footer>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/plugins/datatables/datatables.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/students.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->
</html>