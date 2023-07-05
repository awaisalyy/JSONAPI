<?php

//-----------------------------database connection---------------------
require 'db_connection.php';
//----------------------------Latest Record--------------------------

//----------------------------Course Record--------------------------

$query1 = "SELECT * FROM customers where email<>''";
    
$cmd1 = mysqli_query($conn,$query1);

    $json_array=array();
    while($row=mysqli_fetch_assoc($cmd1))
    {
       $json_array[]=$row;
    }
    
// CSV file name => geeks.csv
$csv = 'geeks.csv';
   
// File pointer in writable mode
$file_pointer = fopen($csv, 'w');
   
// Traverse through the associative
// array using for each loop
foreach($json_array as $i){
      
    // Write the data to the CSV file
    fputcsv($file_pointer, $i);
}
   
// Close the file pointer.
fclose($file_pointer);
  
?>