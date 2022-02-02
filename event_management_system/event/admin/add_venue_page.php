<?php
include "dbconnection.php";
session_start();
$query="select * from venuetable order by vid desc limit 1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$lastid=$row['vid'];
if($lastid == " ")
{
	$empid="VE1";
}
else{
	$empid=substr($lastid,2);
	$empid=intval($empid);
	$empid="VE".($empid + 1);
}
session_abort();
?>
<?php
session_start();
if(isset($_POST['submit']))
{
    $vid=$_POST["vid"];
    $vname=$_POST["vname"];
    $vamount=$_POST["vamount"];
    $vaddress=$_POST["vaddress"];
    $vimage=$_FILES["vimage"]['name'];
    $query="insert into venuetable(vid,vname,vamount,vaddress,vimage) values ('$vid',' $vname','$vamount','$vaddress','$vimage')";
$query_num=mysqli_query($conn,$query);
if($query_num)
{
move_uploaded_file($_FILES['vimage']['tmp_name'],"upload/".$_FILES['vimage']['name']);
echo '<script>alert("successfull.")</script>';
header("Location:add_venue_page.php");
}
else{
    echo '<script>alert("not successfull.")</script>';
    header("Location:add_venue_page.php");
}

}
session_abort();
?>
<html>
<head>
        <title>addvenuepage</title>
        <style>
            body{
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:column;
                min-height:100vh;
                background-color:#b3568f;
            }
            th,td{
		width:150px;
		text-align:left;
		
	}
            </style>
</head>
<body><h1>ADD VENUE </h1>
    <form action="add_venue_page.php" method = "post" enctype="multipart/form-data">
        <table frame="box" cellpadding="16"  style="background:#ffffff;border:2px solid black;padding:8px" align="center">
<tr><th colspan="3" style="text-align:center;font-size:25px" height="50px">Add Venue</th></tr>
      
<tr>
<th>Venue ID</th>
<td colspan="2"><input size="50" name="vid" placeholder="venue id" value="<?php echo $empid; ?>" readonly></td></tr>
<br><br>
<tr>
<th>Venue Name</th>
<td colspan="2"><input size="50" name="vname" placeholder="venue name" type="text" required></td></tr>

<br><br>

<tr>
<th> Venue Amount</th>
<td colspan="2"><input size="50" name="vamount" placeholder="venue amount" type="text" required></td></tr>
<tr>
<tr>
<th>Venue Address</th>
<td colspan="2"><input size="50" name="vaddress" placeholder="venue address" type="text" required></td></tr>
<br><br>
<tr>
<tr>
<th> Image to upload</th>
<td colspan="2"><input size="50" name="vimage" type="file" accept="image/*" required></td></tr>
<tr><th></th>
<td><input type="submit" name="submit" value="upload"></td>
<td><button type="reset" style="background-color:#f54542;" >RESET</button></td>
</tr>
    </table>
</form>

</body>

</html>