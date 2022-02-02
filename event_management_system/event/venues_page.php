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
<body><h1>VENUE DETAILS </h1>
    <form action=" " method = "post" enctype="multipart/form-data">
    <table  frame="box" cellpadding="16"  style="border:2px solid black;padding:8px">
        <thead>

<tr>
<th>Venue ID</th>
<th>Venue Name</th>
<th>Venue Amount</th>
<th>Venue Address</th>
<th>Venue Image</th>
</tr>
</thead>
<?php
include "dbconnection.php";
$query="select * from venuetable";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
    ?>
    <tr>
    <td><?php echo $row['vid']; ?></td>
    <td><?php echo $row['vname']; ?></td>
    <td><?php echo $row['vamount']; ?></td>
    <td><?php echo $row['vaddress']; ?></td>
    <td><img src="<?php echo "http://localhost/event_management_system/event/admin/upload/".$row['vimage'];  ?>" height="100px" width="150px"></td>
        
    </tr>
    <?php
}
?>
</table>
</form>

</body>

</html>