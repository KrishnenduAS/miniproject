<?php

session_start();
 include "dbconnection.php";
 
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
      $price=$price+5000;
    }
    if($food[$i]==5){
      $price=$price+5000;
    }
    if($food[$i]==6){
      $price=$price+5000;
    }
    if($food[$i]==7){
      $price=$price+5000;
    }
    if($food[$i]==8){
      $price=$price+5000;
    }
    if($food[$i]==9){
      $price=$price+5000;
    }
    if($food[$i]==10){
      $price=$price+0;
    }
    if($food[$i]==11){
      $price=$price+0;
    }
    if($food[$i]==12){
      $price=$price+5000;
    }
    if($food[$i]==13){
      $price=$price+5000;
    }
    if($food[$i]==14){
      $price=$price+5000;
    }
    if($food[$i]==15){
      $price=$price+0;
    }
    if($food[$i]==16){
      $price=$price+0;
    }
    if($food[$i]==17){
      $price=$price+5000;
    }
    if($food[$i]==18){
      $price=$price+5000;
    }
    if($food[$i]==19){
      $price=$price+5000;
    }
    if($food[$i]==20){
      $price=$price+0;
    }
    if($food[$i]==21){
      $price=$price+5000;
    }
    if($food[$i]==22){
      $price=$price+5000;
    }
    if($food[$i]==23){
      $price=$price+5000;
    }
   
  }
  echo "Final amount is : ".$price. "<br>" ;
}


session_destroy();


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
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<body>
<form action=" " method="post"
<h1>Complete your Booking...</h1>
<table>
    <tr>
    <td>EQUIPMENTS</td>
    <td>
    <label class="container">DJ
        <input type="checkbox"name="choice[]" value="1">
        <span class="checkmark"></span>
    </label>
    <label class="container">STAGE
        <input type="checkbox" name="choice[]" value="2">
        <span class="checkmark"></span>
    </label>
    <label class="container">MIKE AND SPEAKER
        <input type="checkbox" name="choice[]" value="3">
        <span class="checkmark"></span>
    </label>
    </td><td></td>
    </tr>
    <tr>
    <td>FOOD</td>
    <td>
    <label class="container">BREAKFAST
        <input type="checkbox"  name="choice[]" value="4">
        <span class="checkmark"></span>
    </label>
    <label class="container">LUNCH
        <input type="checkbox" name="choice[]" value="5">
        <span class="checkmark"></span>
    </label>
    <label class="container">TEA & SNACKS
        <input type="checkbox" name="choice[]" value="6">
        <span class="checkmark"></span>
    </label>
    </td>
    <td><label class="container">DINNER
        <input type="checkbox" name="choice[]" value="7">
        <span class="checkmark"></span>
    </label>
    <label class="container">ONLY VEG
        <input type="checkbox" name="choice[]" value="8">
        <span class="checkmark"></span>
    </label>
    <label class="container">VEG & NON VEG
        <input type="checkbox" name="choice[]" value="9">
        <span class="checkmark"></span>
    </label></td>
    </tr>
    <tr>
    <td>DECORATIONS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="choice[]">
    <option value="10" name="choice[]">Select decoration:</option>
    <option value="11" name="choice[]">None</option>
    <option value="12" name="choice[]">Normal</option>
    <option value="13" name="choice[]">Delux</option>
    <option value="14" name="choice[]">Royal</option>
    </td>
</tr>
<tr>
<td>FLOWERS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="choice[]">
    <option value="15" name="choice[]">Select:</option>
    <option value="16" name="choice[]">None</option>
    <option value="17" name="choice[]">Normal</option>
    <option value="18" name="choice[]">Delux</option>
    <option value="19" name="choice[]">Royal</option>
    </td>
    </tr>
    <tr>
<td>SEATING</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select name="choice[]">
    <option value="20" name="choice[]">Select:</option>
    <option value="21" name="choice[]">CHAIR</option>
    <option value="22" name="choice[]">SOFA</option>
    <option value="23" name="choice[]">CHAIR AND SOFA</option>
   
    </td>
    </tr>
    
    <tr><td>
      <input type="submit" value="SUBMIT"/></td></tr>

   
</table></form>
</body>
</html>
