<?php
require("db.php");
include("authstd.php");

$username=$_SESSION['username'];

$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['Gender'];
$reservation=$_POST['reservation'];
$address=$_POST['address'];
$school=$_POST['school'];
$score=$_POST['score'];
$regno=$_POST['regno'];
$IT=$_POST['IT']; 
$CSE=$_POST['CSE'];
$ME=$_POST['ME'];
$CE=$_POST['CE'];
$EEE=$_POST['EEE'];
$ECE=$_POST['ECE'];
function find( int $x)
{
	global $IT,$CSE,$ME,$CE,$EEE,$ECE;
	
	switch ($x) {
    case $IT:
        return 01;
    case $CSE:
        return 02;
    case $ME:
        return 03;
    case $CE:
        return 04;
    case $EEE:
        return 05;
    case $ECE:
        return 06;
    }
}
 
$query="UPDATE student SET Name='$name', DOB='$dob', Gender='$gender', Address='$address', Reservation='$reservation', School='$school', Total_score=$score, Reg_no=$regno
               WHERE Username='$username'";
$result=mysqli_query($con,$query) or die("query error1".mysqli_error($con));
$query="SELECT Std_id FROM student WHERE  Username='$username'";
$result=mysqli_query($con,$query) or die("query error2".mysqli_error($con));
$row=mysqli_fetch_array($result);
$stdid=$row['Std_id'];

$ch=array();
for($i=0;$i<6;$i++)
{
	$ch[$i]=find($i+1);

}

$query="INSERT INTO  course (Std_id,Choice1,Choice2,Choice3,Choice4,Choice5,Choice6) VALUES ('$stdid','$ch[0]','$ch[1]','$ch[2]','$ch[3]','$ch[4]','$ch[5]') " ;
$result=mysqli_query($con,$query) or die("query error3".mysqli_error($con));
header("location: studui.php");

?>