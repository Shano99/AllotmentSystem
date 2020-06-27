<?php
require("db.php");
include("authstd.php");

$username=$_SESSION['username'];

$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['Gender'];
$address=$_POST['address'];
$school=$_POST['school'];
$score=$_POST['score'];
$regno=$_POST['regno'];

 
$query="UPDATE student SET Name='$name', DOB='$dob', Gender='$gender', Address='$address', School='$school', Total_score=$score, Reg_no=$regno
               WHERE Username='$username'";
$result=mysqli_query($con,$query) or die("query error1".mysqli_error($con));

header("location: studui.php");

?>