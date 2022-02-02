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
<body><h1>VIEW STATUS</h1>
    <form action=" " method = "post" enctype="multipart/form-data">
    <table  frame="box" cellpadding="16"  style="border:2px solid black;padding:8px">
        <thead>

<tr>
<th>NAME</th>
<th>EVENT TYPE</th>
<th>VENUE NAME</th>
<th>NO:OF GUESTS</th>
<th>DATE</th>
<th>TIME</th>
<th>BOOKING ID</th>
<th>STATUS</th>
</tr>
</thead>
<?php
session_start();
include "dbconnection.php";
if(isset($_SESSION['login_user']))
{
$query_run=mysqli_query($conn,"SELECT * FROM bookingtable where 'name'=$_SESSION[login_user]");
while($row=mysqli_fetch_array($query_run))
{
    ?>
    
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['etype']; ?></td>
    <td><?php echo $row['vname']; ?></td>
    <td><?php echo $row['number']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['time']; ?></td>
    <td><?php echo $row['bid']; ?></td>
    <td>
    <?php
        if($row['status']==1)
        {
            
            echo '<button style="background-color:#4CAF50;"> Confirmed </button>';
           
        }
        else 
        {
            echo '<button style="background-color:#f54542;"> In Process</button>';
        }
    
    ?>
    
    </td>
    </tr>
    <?php
}
}
?>

</table>
</form>

</body>

</html>