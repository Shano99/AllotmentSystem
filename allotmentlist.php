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
</style>
</head>
<body>

<h2><center>ALLOTMENT LIST</center></h2>
<table>
  <tr>
    <th>STUDENT ID</th>
    <th>ALLOTED COURSE</th>
     <th>SEAT CATEGORY</th>
    
  </tr>
<?php
$query="SELECT Std_id,Allotted_course,Seat_category FROM course ORDER BY Std_id";
$result=mysqli_query($con,$query) or die("query error1".mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
  if(is_null($row['Allotted_course']))
  {?>
    <tr>
    <td><?php echo $row['Std_id'];?></td>
    <td><?php echo "NOT ALLOTTED";?></td>
    <td><?php echo "NONE";?></td>
  </tr>
<?php }
else{ 
  $alot=$row['Allotted_course'];
  $seat=$row['Seat_category'];
   $query2="SELECT Name FROM department WHERE Dept_id=$alot";
   $res= mysqli_query($con,$query2) or die("query error2".mysqli_error($con));
   $name=mysqli_fetch_array($res);
?>
  
  <tr>
    <td><?php echo $row['Std_id'];?></td>
    <td><?php echo $name['Name'];?></td>
    <td><?php echo $seat;?></td>

  </tr>

 <?php }}
  ?>
  
</table>

</body>
</html>
