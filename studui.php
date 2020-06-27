<?php
//include auth.php file on all secure pages
require("db.php");
include("authstd.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Student Dashboard</title>
<link rel="stylesheet" href="css/style.css" />
<style>
   input[type=button] { 
      width: 300px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #00004d;
color: #fff;
border: 1px ;
border-radius: 10px;
   } 
</style>
</head>
<body>
<div class="form">

<table width = "100%" HEIGHT="100%" border = "0">
         
         <tr>
            <td colspan = "2" >
              <center> <IMG src="logo2.jpg" width="400" height="350" ></center>
            </td>
         </tr>
         <tr valign = "top">
            <td  width = "100">
              
<p style="margin-left: 15px;"><font color=" #00004d"><h1>Welcome <?php echo $_SESSION['username']; ?>!</h1></font></p>
<form>
	<p style="margin-left: 15px"><input type="button"  value="LOGOUT" onclick="window.location.href='logout.php'">
	</form>

            </td>
            
            <td  width = "750" height = "800">
            	<form>
                  <?php
                  $username= $_SESSION['username'];
                  $query="SELECT Name FROM student WHERE Username='$username'";
                  $res=mysqli_query($con,$query) or die("query error1".mysqli_error($con));
                  $row=mysqli_fetch_array($res);
                  $name=$row["Name"];
                   if(!isset($name))
                     {?>
			<p><center><input type="button"  onclick="window.location.href='newreg.html'" value="NEW APPLICATION">
<?php } 
else{?>
<p><center><input type="button" value="EDIT APPLICATION" onclick="window.location.href='editapp.php'">

<p><center><input type="button" value="CANCEL APPLICATION" onclick="window.location.href='cancelapp.php'">
<p><center><input type="button" value="APPLICATION STATUS" onclick="window.location.href='allotstatus.php'">
   <?php }?>
</form>
               
            </td>
         </tr>
         <tr>
            
            </td>
         </tr>
         
      </table>



</div>
</body>
</html>
