<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  background-color:#b3568f;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #401e2d;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #b3568f}

.button:active {
  background-color: #b3568f;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
img {
  border-radius: 50%;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 200px;
  align:center;
}

</style>
</head>
<body>

<h2><center>Book Your Events</center></h2>

<div class="row"><form method="post" action="wedding.php">
  <div class="column" style="background-color:#aaa;">
    <h2><center>WEDDING PLANS</center></h2>
    <img src="wed.jpg" height=200></img>
    <button class="button">START</button>
    <p><center><b>planning your big day events.... </b></p></center>
  </div></form>
  <form method="post" action="wedding.php">
  <div class="column" style="background-color:#bbb;">
    <h2><center>CELEBRATE MOMENTS</center> </h2>
    <img src="cele.jpg" height=200></img>
    <button class="button">START</button>
    <p><center><b>plan your birthday,entertainment shows,celebrity events,stage shows..</b></p></center>
  </div></form>
  <form method="post" action="wedding.php">
  <div class="column" style="background-color:#ccc;">
    <h2><center>SEMINARS</center></h2>
    <img src="semi.jpg" height=200></img>
    <button class="button">START</button>
    <p><center><b>plan your cooperate events, promotions, conference...</b></p></center>
  </div></form>
</div>

</body>
</html>
