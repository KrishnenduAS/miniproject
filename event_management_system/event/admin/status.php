<?php
include "dbconnection.php";
$bid=$_GET['bid'];
$status=$_GET['status'];
$q="update bookingtable set status =$status where bid=$bid";
mysqli_query($conn,$q);
header('location:view_bookings.php');
?>