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
<th>NAME</th>
<th>EVENT TYPE</th>
<th>VENUE NAME</th>
<th>DATE</th>
<th>TIME</th>
<th>Confirm</th>
</tr>
</thead>
<?php
include "dbconnection.php";
$query="select * from bookingtable";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['etype']; ?></td>
    <td><?php echo $row['vname']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td><a href="confirm.php?name=<?php echo $row['name']; ?>">Delete</a></td>
    <?php
    
    $_SESSION['idetype'] = $row['etype'];
        $_SESSION['idvname'] = $row['vname'];
        $_SESSION['iddate'] =  $row['date'];
        $_SESSION['idtime'] =$row['time'];
        ?>
    </tr>
    <?php
}
?>
</table>
</form>

</body>

</html>