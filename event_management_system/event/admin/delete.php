<?php
include "dbconnection.php";
$name=$_GET['r'];
$query="delete from feedbacktable where 'name' = '$name'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "deleted from database";
}
else{
    echo " not deleted from database";
}
?>