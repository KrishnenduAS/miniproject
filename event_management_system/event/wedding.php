<!DOCTYPE html>
<html>
<?php
include "dbconnection.php";
session_start();
if(isset($_POST['submit']))
{
    $name=$_SESSION['login_user'];
    $id=$_POST["id"];
    $vname=$_POST["vname"];
    $date=$_POST["date"];
    $time=$_POST["time"];
   
    $sql="insert into bookingtable values ('$name','$id','$vname','$date','$time')";
    if($sql==true)
{
header("location:next.php");
}
else
{
echo("failed");
}
$result=mysqli_query($conn,$sql);
}

session_abort();
?>
<html>
<head>
        <title>feedbackpage</title>
        <style>
            body{
                
                justify-content:center;
                align-items:center;
                flex-direction:column;
                min-height:20vh;
                background-color:#b3568f;
            }
            th,td{
		width:150px;
		text-align:left;
		
	}
    .center {
  margin-left: auto;
  margin-right: auto;
  
}
            </style>
</head>
<body>
    <form action="wedding.php" method = "post" enctype="multipart/form-data">
        <table class="center" frame="box" cellpadding="16"  style="background:#ffffff;border:2px solid black;padding:8px">
<tr><th colspan="3" style="text-align:center;font-size:25px" height="30px">Book your Big Day</th></tr>
      
<tr>
<th>NAME</th>
<td colspan="2"><input size="50" name="name" placeholder="name" value="<?php echo $_SESSION['login_user']; ?>" readonly></td></tr>
<br><br>
<tr>
<th>ID</th>
<td colspan="2"><input size="50" name="id" placeholder="id" type="text" required></td></tr>

<br><br>

<tr>
<th>VENUE NAME</th>       
<td colspan="2"><select>
            <?php echo $options;?>
        </select></td></tr>
<br><br>
<?php
include "dbconnection.php";
$query = "SELECT * FROM `venuetable`";
$result2 = mysqli_query($conn, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}


?>
  

<tr>
<th>DATE</th>
<td colspan="2"><input size="50" name="date" placeholder="date" type="text" required></td></tr>
<br><br>
<tr>
<th>TIME</th>
<td colspan="2"><input size="50" name="time" placeholder="Time" type="text" required></td></tr>
<br><br>
<td><button type="reset" style="background-color:#f54542;" >RESET</button></td>
<td></td><tr><td></td><td><button type="submit" name="submit" style="background-color:#4CAF50;">SUBMIT</button></td></tr>
  </td>
</tr>
    </table>
</form>

</body>

</html>