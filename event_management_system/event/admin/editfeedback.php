<html>
<head>
        <title>edit feedback</title>
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
    table{
        border-collapse:collapse;
        

    }
    .btn{
        background:#fff;
        color : darkred;
        font-size:1.2em;
        padding:10px 30px;
        text-decoration:none;
    }
    .btn:hover{
        background:darkred;
        color:#fff;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #401e2d;
  color:white;
}
            </style>
</head>
<body><h1>VIEW FEEDBACKS </h1>
    <table border="1"  frame="box" cellpadding="16"  style="border:2px solid black;padding:8px">
        <thead>

<tr>
<th>Name</th>
<th>Email</th>
<th>Feedback</th>
<th>Feedback Image</th>
<th>Delete</th>
</tr>
</thead>
<?php
include "dbconnection.php";
$query="select * from feedbacktable";
$query_run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($query_run))
{
    ?>
    <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['feed']; ?></td>
    <td><img src="<?php echo "http://localhost/event_management_system/event/uploads/".$row['fimage'];  ?>" height="100px" width="150px"></td>
    <td><a href="delete.php?name=<?php echo $row['name']; ?>">Delete</a></td>
        

    </form>
    </td>
    </tr>
    <?php
}
?>
</table>
</form>

</body>

</html>