
<html>
<head>
    <title>profile</title>
    <style type="text/css">
        .wrapper{
            width:400px;
            margin:0 auto;
            background-color:#401e2d;
        }
        </style>
</head>
<body style="background-color:#b3568f;"><h1>EDIT PROFILE</h1>
<div class ="container">
<form method="POST" action="my_profile.php" name="form"  onsubmit="return validateForm()">
<table border="0" frame="box" cellpadding="10"  style="background:#ffffff;border:4px solid black;padding:8px" align="center">
<tr><th colspan="3" style="text-align:center;font-size:25px" height="50px">Update Form</th></tr>
<tr>
<th>Name</th>
<td colspan="2"><input size="50" name="name" id="name" type="text" placeholder="full name" required></td></tr>


<tr>
<th>Email id</th>
<td colspan="2"><input size="50" name="email" id="email" type="text" placeholder="email id" required></td></tr>
<tr>

<tr>
<th>Mobile</th>
<td colspan="2"><input size="50" name="mobile" id="mobile" type="text" placeholder="contact number" required></td></tr>
<tr>
<tr>
<th>Place</th>
<td colspan="2"><input size="50" name="place" id="place" type="text" placeholder="place" required></td></tr>
<tr>  
<tr>  
<th>Password</th>
<td colspan="2"><input size="50" id="password" type="password" name="password" placeholder="password"required></td></tr>
<tr>
<th>Re-enter Password</th>
<td colspan="2"><input size="50" id="password1" type="password" name="password1" placeholder="confirm password" required></td></tr>

<tr>

<td colspan="3" style="text-align:center;">
<button type="reset" style="background-color:#f54542;" >RESET</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="update" style="background-color:#4CAF50;">UPDATE</button></td></tr>


</table>
</form>
<?php
include "dbconnection.php";
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $query="update usertable set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',password='$_POST[password]',password1='$_POST[password1]' where name='$_POST[name]'";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        echo '<script>alert("UPDATE SUCCESSFULL")</script>';
    }
    else{
        echo '<script>alert("UPDATE  NOT SUCCESSFULL")</script>';
    }
}

?>
<div  class="wrapper">


</div>
</div>
<script>
        function validateForm() {
            var name = document.form.name.value;
            var mobile = document.form.mobile.value;
            var password1 = document.form.password1.value;
            var password = document.form.password.value;
            var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            var ren = /[0-9!@#$%^&*]/

            if (name == "") {
                alert("Enter First Name !!");
                document.form.name.focus();
                return false;
            }
            else if(ren.test(name)){
                alert("Enter Valid Name !!");
                document.form.name.focus();
                return false;
            }

            if (mobile == "") {
                alert("Enter Mobile number");
                return false;
            }
            else if (isNaN(mobile)) {
                alert("Enter valid Mobile number");
                return false;
            }
            else if (mobile.length != 10) {
                alert("Enter Mobile number with 10 digit");
                return false;
            }

            

            if (password == "" || password.length < 8 || !re.test(password)) {
                alert("Enter minimum 8 digit Password !!" + '\n' + "Atleast one Lowercase & uppercase & digti & special charecter must be included");
                document.form.password.focus();
                return false;
            }
            if (password1 == "" || password1.length < 8 || !re.test(password1)) {
                alert("Enter minimum 8 digit Password !!" + '\n' + "Atleast one Lowercase & uppercase & digti & special charecter must be included");
                document.form.password1.focus();
                return false;
            }

        }
    </script>
</body>
</html>