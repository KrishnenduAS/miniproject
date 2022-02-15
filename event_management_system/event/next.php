<?php

session_start();
 include "dbconnection.php";
$number = -999;
 if(isset($_SESSION['idwedd'])){
   $number = $_SESSION['idwedd'];
  
 }
 


//session_destroy();


?>



<!DOCTYPE html>
<html>
<style>
  th,td{
		width:150px;
		text-align:left;
		
	}
  table {
  border-collapse: collapse;
  width: 150%;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 2px solid #ddd;
}
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: nullpx;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

        body{
            width:400px;
            margin:0 auto;
            background-color:#401e2d;
        }
        </style>
</head>
<body style="background-color:#b3568f;">
</style>
<body>
<form action="" method="post">
<h1>Complete your Booking...</h1>
<table>
<tr>
    <td>EQUIPMENTS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="equipment">
     <option value="null" name="equipment">Select:</option>
    <option value="STAGE_MIKE_SPEAKER"  name="equipment">STAGE,MIKE $ SPEAKER</option>
    <option value="DJ_STAGE"  name="equipment">DJ,STAGE</option>
    <option value="DJ"  name="equipment">DJ</option>
   
    </td><br>
</tr>
<br>
<tr>
    <td>FOOD</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="food">
     <option value="null" >Select</option>
    <option value="BREAKFAST">BREAKFAST</option>
    <option value="LUNCH">LUNCH</option>
    <option value="TEA_SNACKS">TEA $ SNACKS</option>
    <option value="DINNER">DINNER</option>
    <option value="BREAKFAST_LUNCH">BREAKFAST $ LUNCH</option>
    <option value="LUNCH_DINNER">LUNCH $ DINNER</option>
    </td>
    <tr>
    <td>DECORATIONS</td>
    <td>
    <div class="custom-select" style="width:200px;">
    <input type="radio" name="decoration" value="None" id="radio">None</input>
    <input type="radio" name="decoration" value="Normal">Normal</input>
    <input type="radio" name="decoration" value="Delux">Delux</input>
    <input type="radio" name="decoration" value="Royal">Royal</input>
    </td>
</tr>
<br>
<tr>
<td>FLOWERS</td>
    <td>
    <div class="custom-select" style="width:200px;">
    <input type="radio" name="flower" value="None" id="radio">None</input>
    <input type="radio" name="flower" value="Normal">Normal</input>
    <input type="radio" name="flower" value="Delux">Delux</input>
    <input type="radio" name="flower" value="Royal">Royal</input>


    </td>
    </tr>
    <tr>
<td>SEATING</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="seating">
    <option value="null">Select:</option>
    <option value="CHAIR" >CHAIR</option>
    <option value="SOFA" >SOFA</option>
    <option value="CHAIR_AND_SOFA" >CHAIR AND SOFA</option>
   
    </td>
    </tr>
    
    
    <tr><td>
      </td>
      
      <td><input  style="background-color:#6b99e3;" type="submit" value="SUBMIT" name="calculate"/>
      </td>
      
      </tr>
      <tr><td>TOTAL AMOUNT</td>
      
      <td>
      <input  type="text"  id="amountShow"  name="price"/></td>
      
      </tr>
        <tr>
<td></td>
<td>

      <input style="background-color:#6b99e3;"  type="submit" value="CONFIRM" name="confirm"/></td></tr>
<?php
include "dbconnection.php";
if(isset($_POST['calculate']))
{
  //echo "<script>alert('ok0')</script>";
    $equipment=$_POST["equipment"];
    $food=$_POST["food"];
    $decoration=$_POST["decoration"];
    $flower=$_POST["flower"];
    $seating=$_POST["seating"];
    $name=$_SESSION['idname'];
    $date=$_SESSION['iddate'];
    $bid=$_SESSION['idbid'];
    $price=1;
    //echo "<script>alert('ok1')</script>";
    

   
//

 
  $price=0.0;
  
 
  if($equipment=="null"){
    $price=$price+0;
  }
    if($equipment=="STAGE_MIKE_SPEAKER"){
      $price=$price+5000;
    }
  
    if($equipment=="DJ_STAGE"){
      $price=$price+2500;
    }
    if($equipment=="DJ"){
      $price=$price+1000;
    }
    if($food=="null"){
      $price=$price+0;
    }
    if($food=="BREAKFAST"){
      $price=100*$number;
    }
    if($food=="LUNCH"){
      $price=110*$number;
    }
    if($food=="TEA_SNACKS"){
      $price=100*$number;
    }
    if($food=="DINNER"){
      $price=200*$number;
    }
    if($food=="BREAKFAST_LUNCH"){
      $price=200*$number;
    }

    if($food=="LUNCH_DINNER"){
      $price=200*$number;
    }
    if($decoration=="None"){
      $price=$price+0;
    }
    if($decoration=="Normal"){
      $price=$price+2500;
    }
    if($decoration=="Delux"){
      $price=$price+3500;
    }
    if($decoration=="Royal"){
      $price=$price+4500;
    }
    if($flower=="None"){
      $price=$price+0;
    }
    if($flower=="Normal"){
      $price=$price+2500;
    }
    if($flower=="Delux"){
      $price=$price+3500;
    }
    if($flower=="Royal"){
      $price=$price+4500;
    }
    
    
    if($seating=="CHAIR"){
      $price=100*$number;
    }
    if($seating=="SOFA"){
      $price=200*$number;
    }
    if($seating=="CHAIR_AND_SOFA"){
      $price=300*$number;
    }
    
  
  
  echo "<script>";
  echo "document.getElementById('amountShow').value=";
  echo $price;
  echo "</script>";


  $sql="insert into bookingdetails values ('$equipment','$food','$decoration','$flower','$seating','$name','$date','$bid','$price')";
    if(mysqli_query($conn,$sql)){
      echo "<script>alert('your booking is under processing, please confirm..')</script>";
    }else{
      echo "<script>alert(".mysqli_error($conn).")</script>";
    }
}
?> 
</table></form>
</body>
</html>
