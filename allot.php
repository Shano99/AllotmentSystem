
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

require("db.php");
$query="UPDATE department SET Filled_nonres=0,Filled_res=0";
$res=mysqli_query($con,$query)
		or die("failed to query0 database" .mysqli_error($con));
$query="UPDATE course SET Allotted_course=NULL,Seat_category=NULL";
$res=mysqli_query($con,$query)
		or die("failed to query0 database" .mysqli_error($con));

$query="SELECT * FROM course INNER JOIN student ON course.Std_id=student.Std_id ORDER BY student.Rank";
$result=mysqli_query($con,$query)
		or die("failed to query1 2database" .mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$stdid=$row['Std_id'];
	$choice=array();
	$choice[0]=$row['Choice1'];
	$choice[1]=$row['Choice2'];
	$choice[2]=$row['Choice3'];
	$choice[3]=$row['Choice4'];
	$choice[4]=$row['Choice5'];
	$choice[5]=$row['Choice6'];
	$res=$row['Reservation'];
	

	
	$flag=0;
	for($j=0;$j<6;$j++)
	{
		$current=$choice[$j];
		$qu2="SELECT Filled_nonres,Total_nonres,Filled_res,Total_res from department where Dept_id='$current'";
		$res2=mysqli_query($con,$qu2) or die("failed to query3 database" .mysqli_error($link));
		$row2=mysqli_fetch_array($res2);
		$filgen=$row2['Filled_nonres'];
		$totgen=$row2['Total_nonres'];
		$filres=$row2['Filled_res'];
		$totres=$row2['Total_res'];
        
		

		if($filgen<$totgen)
		{
			$updatequ1="UPDATE department SET  Filled_nonres=$filgen+1 where Dept_id='$current' ";
			$updateres1=mysqli_query($con,$updatequ1) or die("failed to query4 database" .mysqli_error($con));
			$statusqu1="UPDATE course set Allotted_course=$current,Seat_category='GEN' where Std_id='$stdid'";
			$statusres1=mysqli_query($con,$statusqu1)
			or die("failed to query4 database" .mysqli_error($con));
			$flag=1;
			break;
		}
		elseif ($res=="Yes" and $filres<$totres)
		{
			$updatequ1="UPDATE department SET  Filled_res=$filres+1 where Dept_id='$current' ";
			$updateres1=mysqli_query($con,$updatequ1) or die("failed to query5 database" .mysqli_error($con));
			$statusqu1="UPDATE course set Allotted_course=$current,Seat_category='RES' where Std_id='$stdid'";
			$statusres1=mysqli_query($con,$statusqu1)
			or die("failed to query5 database" .mysqli_error($con));
			$flag=1;
			break;
		}
	}
	if($flag==0)
	{
		$statusqu2="UPDATE course set Allotted_course=0,Seat_category='None' where Std_id='$stdid' ";
		$statusres2=mysqli_query($con,$statusqu2)
		or die("failed to query6 database" .mysqli_error($con));
		
	}
}
echo "<script>
 if(!alert('Allotment process has been successfully completed!!')) {
    window.location.href = 'adminui.php';
}
 
	</script>";



?>
</body>
</html>