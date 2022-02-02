<?php
include "dbconnection.php";
session_start();
$q=mysqli_query($conn,"SELECT * FROM usertable where 'name'='$_SESSION[login_user]';");
$row=mysqli_fetch_assoc($q);
echo "<b>WELCOME</b> ".$_SESSION['login_user'];
session_abort();
?>
<html>
<head>
</head>
<body>
<style>
body
{
background-color:#401e2d;
}
a,h3
{
color:white;
text-decoration:none;
}
a:link,a:visited 
{
  background-color: #b3568f;
  color: white;
  padding: 4px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:active,a:hover {
  background-color: #401e2d;
}
</style>
<table>
<tr><br>
<td><a href="my_profile.php" target="main"><h3>My Profile</h3></a>
</td>
</tr>
<tr><br>
<td>
<a href="venues_page.php" target="main"><h3>Venues</h3></a>
</td>
</tr>
<tr><br>
<td>
<a href="new_booking.php" target="main"><h3>New Booking</h3></a>
</td>
</tr>
<tr><br>
<td>
<a href="view_status.php" target="main"><h3>View Status</h3></a>
</td>
</tr>
<tr><br>
<td><a href="feedback.php" target="main"><h3>Feedback</h3></a>
</td>
</tr>
<tr><br>
<td><a href="home.php" target="_top"><h3>Logout</h3></a>
</td>
</tr>
</table>
<br>

</body>
</html>