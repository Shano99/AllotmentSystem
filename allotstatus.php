<?php
require("db.php");
include("authstd.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ALLOTMENT STATUS</title>
</head>
<body>
  
               <center><img src="logo2.jpg" width="400" height="350" ></center>
               <br >
               <br>
               <br>
             

<?php
$user=$_SESSION['username'];
$query="SELECT  Std_id FROM student  WHERE Username='$user' ";
$res=mysqli_query($con,$query) or die("falied to query1".mysqli_error($con));
$row2=mysqli_fetch_array($res);
$stdid=$row2['Std_id'];
$query="SELECT  Allotted_course,Seat_category FROM  course WHERE Std_id='$stdid' ";
$res=mysqli_query($con,$query) or die("falied to query1".mysqli_error($con));
$row=mysqli_fetch_array($res);


 if(is_null($row['Allotted_course']))
  {?>
    
    <center><p><h1><font color=" #00004d">ALLOTTED COURSE:<?php echo " NOT ALLOTTED YET";?></font></h1></p>
    <center><P><h1><font color=" #00004d">SEAT CATEGORY:<?php echo " NONE";?></font></h1></p>
  
<?php }
else{ 
  $alot=$row['Allotted_course'];
  $seat=$row['Seat_category'];
   $query2="SELECT Name FROM department WHERE Dept_id=$alot";
   $res= mysqli_query($con,$query2) or die("query error2".mysqli_error($con));
   $name=mysqli_fetch_array($res);
    $alot=$name['Name'];
?>
  <center><p><h1><font color=" #00004d">ALLOTTED COURSE:<?php echo " $alot";?></font></h1></p>
  <center><p><h1><font color=" #00004d">SEAT CATEGORY:<?php echo " $seat";?></font></h1></p>
  
<?php }?>
</body>
</html>
