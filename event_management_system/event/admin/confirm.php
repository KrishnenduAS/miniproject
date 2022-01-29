<?php

include "dbconnection.php"; // Using database connection file here
session_start();
$name = $_GET['name']; // get id through query string
$etype= $_SESSION['idetype'];
$vname=$_SESSION['idvname'];
$date=$_SESSION['iddate'];
$time=$_SESSION['idtime'];



$del = mysqli_query($conn,"insert into confirmbookingtable values ('$name','$etype','$vname','$date','$time'"); // delete query

if($del==true)
{
   // Close connection
    header("location:view_bookings.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error confirming record"; // display error message if not delete
}
?>