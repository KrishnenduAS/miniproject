<?php

include "dbconnection.php"; // Using database connection file here

$name = $_GET['name']; // get id through query string

$del = mysqli_query($conn,"delete from feedbacktable where name = '$name'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:editfeedback.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>