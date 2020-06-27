<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 
require("db.php");
include("authstd.php");

	$username=$_SESSION['username']; 
	$query="SELECT Std_id FROM student WHERE Username='$username'";
	$res=mysqli_query($con,$query) or die("query error1".mysqli_error($con));
	$row=mysqli_fetch_array($res);
	$stdid=$row["Std_id"];
	$query="DELETE FROM course WHERE Std_id='$stdid'";
	$res=mysqli_query($con,$query) or die("query error3".mysqli_error($con));
	$query="DELETE FROM student WHERE Username='$username'";
	$res=mysqli_query($con,$query) or die("query error2".mysqli_error($con));
    
	
			 echo "<script>
 if(!alert('YOUR APPLICATION IS CANCELLED!!')) {
    window.location.href = 'logout.php';
}
 
	</script>";
	
?>

</body>
</html>


