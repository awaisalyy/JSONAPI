<?php
include "dbconnection.inc";

$query="select * from customers";
$cmd=mysqli_query($conn,$query);

$json_array=array();

while($row=mysqli_fetch_assoc($cmd))
{
   $json_array[]=$row;
}

// CSV file name => geeks.csv
$csv = 'customers.csv';
   
// File pointer in writable mode
$file_pointer = fopen($csv, 'w');
   
// Traverse through the associative
// array using for each loop
foreach($json_array as $i)
{
    // Write the data to the CSV file
    fputcsv($file_pointer, $i);
}
   
// Close the file pointer.
fclose($file_pointer);

 header("Location: customers.csv");
?>