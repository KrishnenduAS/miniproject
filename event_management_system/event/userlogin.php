<?php
include "dbconnection.php";
session_start();
if(isset($_POST['submit']))
{
$name=$_POST["name"];
$password=$_POST["password"];
$sql="select * from usertable where name='$name' && password = '$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
  header('location:user_page.php');
  $_SESSION['login_user']=$name;
	
	
}
else
{
	header('location:userlogin.php');
}
}
?>

<html>  
<head>  
    <title>PHP login system</title>  
    <link rel = "stylesheet" type = "text/css" href = "user.css">   
</head>  
<body>
<div class="bg-img">
  <form method="post" class="container">
    <h1>Login</h1>

    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn" name="submit">Login</button>
   <a href="registration.php">New User</a>
  </form>
</div> 

</body>     
</html>  