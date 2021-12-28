<?php
include "dbconnection.php";
session_start();
$query="select * from usertable order by id desc limit 1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$lastid=$row['id'];
if($lastid == " ")
{
	$empid="CS1";
}
else{
	$empid=substr($lastid,2);
	$empid=intval($empid);
	$empid="CS".($empid + 1);
}
if(isset($_POST['submit']))
{
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$password=$_POST["password"];
$password1=$_POST["password1"];
$sql="select * from usertable where name='$name'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
	echo '<script>alert("USERNAME IS ALREADY TAKEN.")</script>';
}
else
{
	$reg="INSERT INTO usertable VALUES('$id','$name','$email','$mobile','$password','$password1')";
	mysqli_query($conn,$reg);
	echo '<script>alert("REGISTRATION SUCCESSFULLY COMPLETED.")</script>';
}
}
session_abort();
?>


<html>
<head>
<title>Application Form</title>
<style>
	th,td{
		width:150px;
		text-align:left;
		
	}
	marquee{
		color:red;
		font-weight:bold;
		font-size:25px;
	}
	
	h1
	{
		
		font-weight:bold;
		font-size:50px;
		color:white;
		border: none;
		padding:10px;
		border-radius:5px;
	}
    button{
        font-weight:bold;
		font-size:15px;
		color:white;
		border: none;
		padding:10px;
		border-radius:5px;
    }
	
</style>

	</head>
	
	
<body  style="background-image: url('0.jpg');background-size: cover;">
<h1 style="text-align:center">WELCOME USER!!!</h1>

<form method="POST" action="registration.php">
<table border="0" frame="box" cellpadding="10"  style="background:#ffffff;border:4px solid black;padding:8px" align="center">
<tr><th colspan="3" style="text-align:center;font-size:25px" height="50px">Registration Form</th></tr>
<tr>
<th>Id</th>
<td colspan="2"><input size="50" name="id" id="id" type="text" value="<?php echo $empid; ?>" readonly></td></tr>


<tr>
<th>Name</th>
<td colspan="2"><input size="50" name="name" id="name" type="text" required></td></tr>


<tr>
<th>Email id</th>
<td colspan="2"><input size="50" name="email" id="email" type="text" required></td></tr>
<tr>

<tr>
<th>Mobile</th>
<td colspan="2"><input size="50" name="mobile" id="mobile" type="text" required></td></tr>
<tr>
<tr>
<th>Password</th>
<td colspan="2"><input size="50" id="password" type="password" name="password" required></td></tr>
<tr>
<th>Re-enter Password</th>
<td colspan="2"><input size="50" id="password1" type="password" name="password1" required></td></tr>

<tr>

<td colspan="3" style="text-align:center;">
<button type="reset" style="background-color:#f54542;" >RESET</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="submit" style="background-color:#4CAF50;">SUBMIT</button></td></tr>


</table>
</form>

</body></html>