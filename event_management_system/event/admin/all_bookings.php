<html>
<head>
        <title>venueview</title>
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
    tr:nth-child(even){background-color: #f2f2f2}
    tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #401e2d;
  color:white;
}
            </style>
</head>
<body>
    <form action=" " method = "post" enctype="multipart/form-data">
    <table  frame="box" cellpadding="16"  style="border:2px solid black;padding:8px">
        <thead>

<tr>
<th>EQUIPMENTS</th>
<th>FOOD</th>
<th>DECORATIONS</th>
<th>FLOWERS</th>
<th>SEATING</th>
<th>NAME</th>
<th>DATE</th>
</tr>
</thead>
<?php
include "dbconnection.php";
$query="select * from bookingdetails";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
    ?>
    <tr>
    <td><?php echo $row['equipment']; ?></td>
    <td><?php echo $row['food']; ?></td>
    <td><?php echo $row['decoration']; ?></td>
    <td><?php echo $row['flower']; ?></td>
    <td><?php echo $row['seating']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['date']; ?></td>
    
    </tr>
    <?php
}
?>
</table>
</form>

</body>

</html>