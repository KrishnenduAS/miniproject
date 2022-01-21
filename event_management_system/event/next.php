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

<h1>Complete your Booking...</h1>
<table>
    <tr>
    <td>EQUIPMENTS</td>
    <td>
    <label class="container">DJ
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
    </label>
    <label class="container">STAGE
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <label class="container">MIKE AND SPEAKER
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    </td><td></td>
    </tr>
    <tr>
    <td>FOOD</td>
    <td>
    <label class="container">BREAKFAST
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
    </label>
    <label class="container">LUNCH
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <label class="container">TEA & SNACKS
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    </td>
    <td><label class="container">DINNER
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
    </label>
    <label class="container">ONLY VEG
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <label class="container">VEG & NON VEG
        <input type="checkbox">
        <span class="checkmark"></span>
    </label></td>
    </tr>
    <tr>
    <td>DECORATIONS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select>
    <option value="0">Select decoration:</option>
    <option value="1">None</option>
    <option value="2">Normal</option>
    <option value="3">Delux</option>
    <option value="0">Royal</option>
    </td>
</tr>
<tr>
<td>FLOWERS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select>
    <option value="0">Select:</option>
    <option value="1">None</option>
    <option value="2">Normal</option>
    <option value="3">Delux</option>
    <option value="0">Royal</option>
    </td>
    </tr>
    <tr>
<td>SEATING</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select>
    <option value="0">Select:</option>
    <option value="1">CHAIR</option>
    <option value="2">SOFA</option>
    <option value="3">CHAIR AND SOFA</option>
   
    </td>
    </tr>
    <tr>
<td>NUMBER OF GUESTS</td>
    <td>
    <div class="custom-select" style="width:200px;">
     <select>
    <option value="0">Select:</option>
    <option value="1">LESS THAN 1000</option>
    <option value="2">1000-1500</option>
    <option value="3">1500-2000</option>
    <option value="3">2000-2500</option>
    <option value="3">2500-3000</option>
    </td>
    </tr>
    <tr>

   
</table>
</body>
</html>
