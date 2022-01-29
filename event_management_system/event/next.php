<?php

session_start();
 include "dbconnection.php";
$number = -999;
 if(isset($_SESSION['idwedd'])){
   $number = $_SESSION['idwedd'];
  
 }
if(isset($_POST["choice"])){
  $food=$_POST["choice"];
  $c=count($food);
  $price=0.0;
  
  for($i=0;$i<$c;$i++){
    if($food[$i]==1){
      $price=$price+5000;
    }
    if($food[$i]==2){
      $price=$price+5000;
    }
  
    if($food[$i]==3){
      $price=$price+5000;
    }
    if($food[$i]==4){
      $price=null0*$number;
    }
    if($food[$i]==5){
      $price=150*$number;
    }
    if($food[$i]==6){
      $price=null0*$number;
    }
    if($food[$i]==7){
      $price=200*$number;
    }
    if($food[$i]==8){
      $price=200*$number;
    }
    if($food[$i]==9){
      $price=200*$number;
    }

    
    if($food[$i]==null){
      $price=$price+0;
    }
    if($food[$i]==11){
      $price=$price+0;
    }
    if($food[$i]==12){
      $price=$price+3500;
    }
    if($food[$i]==13){
      $price=$price+4500;
    }
    if($food[$i]==14){
      $price=$price+1500;
    }
    if($food[$i]==15){
      $price=$price+0;
    }
    if($food[$i]==16){
      $price=$price+0;
    }
    if($food[$i]==17){
      $price=$price+4000;
    }
    if($food[$i]==18){
      $price=$price+4500;
    }
    if($food[$i]==19){
      $price=$price+5000;
    }
    if($food[$i]==20){
      $price=$price+0;
    }
    if($food[$i]==21){
      $price=150*$number;
    }
    if($food[$i]==22){
      $price=300*$number;
    }
    if($food[$i]==23){
      $price=200*$number;
    }
   
  }
  
  echo "----------Final amount is : -------".$price. "<br>" ;
}


//session_destroy();


?>



<!DOCTYPE html>
<html>
<style>
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
<form action=" " method="post">
<h1>Complete your Booking...</h1>
<table>
<tr>
    <td>EQUIPMENTS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="equipment">
     <option value="null">Select:</option>
    <option value="STAGE,MIKE $ SPEAKER">STAGE,MIKE $ SPEAKER</option>
    <option value="DJ,STAGE">DJ,STAGE</option>
    <option value="DJ">DJ</option>
   
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
    <option value="TEA $ SNACKS">TEA $ SNACKS</option>
    <option value="DINNER">DINNER</option>
    <option value="BREAKFAST $ LUNCH">BREAKFAST $ LUNCH</option>
    <option value="LUNCH $ DINNER">LUNCH $ DINNER</option>
    </td>
    <tr>
    <td>DECORATIONS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="decoration">
    <option value="null" >Select decoration:</option>
    <option value="None">None</option>
    <option value="Normal">Normal</option>
    <option value="Delux">Delux</option>
    <option value="Royal">Royal</option>
    </td>
</tr>
<br>
<tr>
<td>FLOWERS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="flower"> 
    <option value="null" >Select:</option>
    <option value="None">None</option>
    <option value="Normal" >Normal</option>
    <option value="Delux" >Delux</option>
    <option value="Royal" >Royal</option>

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
    <option value="CHAIR AND SOFA" >CHAIR AND SOFA</option>
   
    </td>
    </tr>
    
    <tr><td>
      <input type="submit" value="SUBMIT" name="submit"/></td>
      <td>
      
<?php
include "dbconnection.php";
if(isset($_POST['submit']))
{
    
 
    $equipment=$_POST["equipment"];
    $food=$_POST["food"];
    $decoration=$_POST["decoration"];
    $flower=$_POST["flower"];
    $seating=$_POST["seating"];
    $name=$_SESSION['idname'];
    $date=$_SESSION['iddate'];
    $sql="insert into bookingdetails values ('$equipment','$food','$decoration','$flower','$seating','$name','$date')";
    $result=mysqli_query($conn,$sql);
}
?> 
</table></form>
</body>
</html>
