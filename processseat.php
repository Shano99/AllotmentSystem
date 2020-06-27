<?php
require('db.php');
$entries=array();
$entries[0]=$_POST['ITtot'];
$entries[1]=$_POST['ITres'];
$entries[2]=$_POST['CStot'];
$entries[3]=$_POST['CSres'];
$entries[4]=$_POST['MEtot'];
$entries[5]=$_POST['MEres'];
$entries[6]=$_POST['CEtot'];
$entries[7]=$_POST['CEres'];
$entries[8]=$_POST['EEEtot'];
$entries[9]=$_POST['EEEres'];
$entries[10]=$_POST['ECEtot'];
$entries[11]=$_POST['ECEres'];
$j=0;
for($i=0;$i<12;$i=$i+2)
{
	$j++;
	$k=$i+1;
	
	$query="UPDATE department SET Total_nonres=$entries[$i], Total_res=$entries[$k] WHERE Dept_id=$j";
	$result=mysqli_query($con,$query) or die("query error".mysqli_error($con));
    
}
header('location:allot.php');

exit();
?>