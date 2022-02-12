<?php

session_start();
 include "dbconnection.php";
$number = -999;
 if(isset($_SESSION['idwedd'])){
   $number = $_SESSION['idwedd'];
  
 }
if(isset($_POST["equipment"])){
  $food=$_POST["equipment"];
  $c=count($food);
  $price=0.0;
  
  for($i=0;$i<$c;$i++){
    
    if($food[$i]=="STAGE,MIKE $ SPEAKER"){
      $price=$price+5000;
    }
  
    if($food[$i]=="DJ,STAGE"){
      $price=$price+5000;
    }
    if($food[$i]=="DJ"){
      $price=$price+1000;
    }
    if($food[$i]=="BREAKFAST"){
      $price=150*$number;
    }
    if($food[$i]=="LUNCH"){
      $price=110*$number;
    }
    if($food[$i]=="TEA $ SNACKS"){
      $price=200*$number;
    }
    
    if($food[$i]=="BREAKFAST $ LUNCH"){
      $price=200*$number;
    }

    
    if($food[$i]=="null"){
      $price=$price+0;
    }
    if($food[$i]=="LUNCH $ DINNER"){
      $price=$price+200;
    }
    if($food[$i]=="Normal"){
      $price=$price+2500;
    }
    if($food[$i]=="Delux"){
      $price=$price+3500;
    }
    if($food[$i]=="Royal"){
      $price=$price+4500;
    }
    if($food[$i]=="None"){
      $price=$price+0;
    }
    
    if($food[$i]=="CHAIR"){
      $price=$price+4000;
    }
    if($food[$i]=="SOFA"){
      $price=$price+4500;
    }
    if($food[$i]=="CHAIR AND SOFA"){
      $price=$price+5000;
    }
    //if($food[$i]==20){
      //$price=$price+0;
    //}
    //if($food[$i]==21){
      //$price=150*$number;
   // }
    //if($food[$i]==22){
      //$price=300*$number;
    //}
    //if($food[$i]==23){
      //$price=200*$number;
    //}
   
  }
  
  echo "----------Final amount is : -------".$price. "<br>" ;
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
<form action=" " method="post">
<h1>Complete your Booking...</h1>
<table>
<tr>
    <td>EQUIPMENTS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="equipment">
     <option value="null" name="equipment">Select:</option>
    <option value="STAGE,MIKE $ SPEAKER"  name="equipment">STAGE,MIKE $ SPEAKER</option>
    <option value="DJ,STAGE"  name="equipment">DJ,STAGE</option>
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
    <option value="TEA $ SNACKS">TEA $ SNACKS</option>
    <option value="DINNER">DINNER</option>
    <option value="BREAKFAST $ LUNCH">BREAKFAST $ LUNCH</option>
    <option value="LUNCH $ DINNER">LUNCH $ DINNER</option>
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
    <option value="CHAIR AND SOFA" >CHAIR AND SOFA</option>
   
    </td>
    </tr>
    
    
    <tr><td>
      </td>
      
      <td><input  style="background-color:#6b99e3;" type="submit" value="SUBMIT" name="submit"/>
      </td>
      
      </tr>
      <tr><td>TOTAL AMOUNT</td>
      
      <td>
      <input  type="text"  name="price"/></td>
      
      </tr>
        <tr>
<td></td>
<td>

      <input style="background-color:#6b99e3;" type="submit" value="CONFIRM" name="confirm"/></td></tr>
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
    $bid=$_SESSION['idbid'];
    $sql="insert into bookingdetails values ('$equipment','$food','$decoration','$flower','$seating','$name','$date','$bid')";
    $result=mysqli_query($conn,$sql);
}
?> 
</table></form>
</body>
</html>
