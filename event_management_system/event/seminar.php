

<!DOCTYPE html>
<html>
<?php
include "dbconnection.php";
if(isset($_POST['submit']))
{
    
    $vname=$_POST["vname"];
    $date=$_POST["date"];
    $sql="select * from bookingtable where vname='$vname' && date = '$date'";
    $result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo '<script>alert("THE CURRENT DATE AND VENUE IS NOT AVAILABLE")</script>';
	
	
}
else
{
    $name=$_POST['name'];
    $etype=$_POST["etype"];
    $number=$_POST["number"];
    $time=$_POST["time"];
    session_start();
    $sql="insert into bookingtable values ('$name','$etype','$vname','$number','$date','$time')";
    if($sql==true){
        $_SESSION['idwedd'] = $number;
	header('location:next.php');}
    $result=mysqli_query($conn,$sql);
}
}

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
<tr><th colspan="3" style="text-align:center;font-size:25px" height="30px">Plan your big ideas</th></tr>
      
<tr>
<th>NAME</th>
<td colspan="2"><input size="50" name="name" placeholder="name" ></td></tr>
<br><br>
<tr>
<th>EVENT TYPE</th>
<td colspan="2"><select name="etype">
    <option value="corporate events" >corporate events</option> 
    <option value=" conference">conference</option>
    <option value="promotions">promotions</option>
    </select></td></tr>
<br><br>

<tr>
<th>VENUE NAME</th>       
<td>
<select name="vname">
    <option disabled selected>-- Select City --</option>
    <?php
        include "dbconnection.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT vname From venuetable");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['vname'] ."'>" .$data['vname'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
  </td></tr>
  <tr>
<th>NUMBER OF GUESTS</th>
<td colspan="2"><input size="50" name="number" placeholder="-----" type="text" required></td></tr>
<br><br>
<tr>
<tr>
<th>DATE</th>
<td colspan="2"><input size="50" name="date" placeholder="YYYY/MM/DD" type="text" required></td></tr>
<br><br>
<tr>
<th>TIME</th>
<td colspan="2"><input size="50" name="time" placeholder="--:--:--" type="text" required></td></tr>
<br><br>
<td><button type="reset" style="background-color:#f54542;" >RESET</button></td>
<td><button type="submit" name="submit" style="background-color:#4CAF50;">SUBMIT</button></td></tr>
  </td>
</tr>
    </table>
</form>

</body>

</html>