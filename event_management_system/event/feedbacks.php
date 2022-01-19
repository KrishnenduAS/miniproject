<html>
<head>
        <title>homefeedback</title>
        <style>
            body{
                display:flex;
                
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
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

            </style>
</head>
<body><a href="\event_management_system\event\home.php" class="previous">&laquo; Previous</a>
    <form action=" " method = "post" enctype="multipart/form-data">
    <table border=0  frame="box" cellpadding="16"  >
        <thead>

<tr>

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
    <td><?php echo $row['feed']; ?></td>
    <td><img src="<?php echo "http://localhost/event_management_system/event/uploads/".$row['fimage'];  ?>" height="100px" width="150px"></td>

        
       
        

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