<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid  #00004d;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #4d4dff;
}
</style>
</head>
<body>

<h2><center>RANK LIST</center></h2>
<table>
  <tr>
    <th>RANK</th>
    <th>STUDENT ID</th>
    
  </tr>
<?php
$query="SELECT Rank,Std_id FROM student ORDER BY Rank";
$result=mysqli_query($con,$query) or die("query error1".mysqli_error($con));
while($row=mysqli_fetch_array($result))
{?>

  
  <tr>
    <td><?php echo $row['Rank'];?></td>
    <td><?php echo $row['Std_id'];?></td>
  </tr>
 <?php }
  ?>
</table>

</body>
</html>
