<?php
//include auth.php file on all secure pages
include("authadmin.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
ADMIN HOMEPAGE
</title>
<style>
input.MyButton {
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
<table width = "100%" HEIGHT="100%" border = "0">
         
         <tr>
            <td >
               <center><img src="logo2.jpg" width="400" height="350" >
            </td>
         </tr>
         <tr>
         <td>

            	<h1>WELCOME ADMIN!!</h1>
         	<p style="margin-left: 15px"> <input class="MyButton" type="button"  value="LOGOUT" onclick="window.location.href='logout.php'">
         	</p>
         </td>
     </tr>
         <tr valign = "top">
            <td  width = "20">
	
<p><center><input class="MyButton" type="button" value="MANAGE COURSE" onclick="window.location.href='managecourse.php'" /></center></p>
<p><center><input class="MyButton" type="button" value="VIEW RANK LIST" onclick="window.location.href='viewranklist.php'" /></center></p>
<p><center><input class="MyButton" type="button" value="VIEW ALLOTMENT LIST" onclick="window.location.href='allotmentlist.php'" /></center></p>
<p><center><input class="MyButton" type="button" value="START ALLOTMENT" onclick="window.location.href='allot.php'" /></center></p>
</td>
</tr>
</table>
</body>
</html>
