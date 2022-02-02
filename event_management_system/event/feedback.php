
<?php
session_start();
if(isset($_POST['submit']))
{
    $name=$_SESSION['login_user'];
    $email=$_POST["email"];
    $feed=$_POST["feed"];
    $fimage=$_FILES["fimage"]['name'];
    $query="insert into feedbacktable (name,email,feed,fimage) values ('$name','$email','$feed','$fimage')";
$query_num=mysqli_query($conn,$query);
if($query_num)
{
move_uploaded_file($_FILES['fimage']['tmp_name'],"uploads/".$_FILES['fimage']['name']);
echo '<script>alert("successfull.")</script>';
header("Location:feedback.php");
}
else{
    echo '<script>alert("not successfull.")</script>';
    header("Location:feedback.php");
}

}
session_abort();
?>
<html>
<head>
        <title>feedbackpage</title>
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
<body><h1>ADD FEEDBACK</h1>
    <form action="feedback.php" method = "post" enctype="multipart/form-data">
        <table frame="box" cellpadding="16"  style="background:#ffffff;border:2px solid black;padding:8px" align="center">
<tr><th colspan="3" style="text-align:center;font-size:25px" height="50px">Add Feedbacks</th></tr>
      
<tr>
<th>NAME</th>
<td colspan="2"><input size="50" name="id" placeholder="id" value="<?php echo $_SESSION['login_user']; ?>" readonly></td></tr>
<br><br>
<tr>
<th>EMAIL</th>
<td colspan="2"><input size="50" name="email" placeholder="email" type="text" required></td></tr>

<br><br>

<tr>
<th>FEEDBACK</th>
<td colspan="2"><input size="50" name="feed" placeholder="feedback" type="text" required></td></tr>
<br><br>
<tr>
<tr>
<th> Image to upload</th>
<td colspan="2"><input size="50" name="fimage" type="file" accept="image/*" required></td></tr>
<tr><th></th>
<td><input type="submit" name="submit" value="upload"></td>
<td><button type="reset" style="background-color:#f54542;" >RESET</button></td>
</tr>
    </table>
</form>

</body>

</html>