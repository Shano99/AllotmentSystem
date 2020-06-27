<!doctype html>
<html>
<head>
<title>MANAGE COURSE</title>
<style>
    input[type=submit] {
  background-color: #00004d;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

  </style>
</head>
<body>

<table width = "100%" HEIGHT="100%" border = "0">
         
        
         <tr valign = "top">
            <td width = "20">
			
               
	<font color=" #00004d">
<h1><center>MANAGE COURSE</h1>
<form method="post" action="processseat.php">

INFORMATION TECHNOLOGY
<center>GENERAL SEATS:<input type="number" name="ITtot" min="3" max="50" value="5">  
RESERVED SEATS:<input type="number" name="ITres" min="1" max="50" value="2">
</center>
<br>
COMPUTER SCIENCE AND ENGINEERING
<center>
GENERAL SEATS:<input type="number" name="CStot" min="3" max="50" value="5">
RESERVED SEATS:<input type="number" name="CSres" min="1" max="50" value="2">
</center>
<br>
MECHANICAL ENGINEERING
<center>
GENERAL SEATS:<input type="number" name="MEtot" min="3" max="50" value="5">
RESERVED SEATS:<input type="number" name="MEres" min="1" max="50" value="2">
</center>
<br>
CIVIL ENGINEERING
<center>
GENERAL SEATS:<input type="number" name="CEtot" min="3" max="50" value="5">
RESERVED SEATS:<input type="number" name="CEres" min="1" max="50" value="2">
</center>
<br>
ELECTRICAL AND ELECTRONICS ENGINEERING
<center>
GENERAL SEATS:<input type="number" name="EEEtot" min="3" max="50" value="5">
RESERVED SEATS:<input type="number" name="EEEres" min="1" max="50" value="2">
</center>
<br>
ELECTRONICS AND COMMUNICATION ENGINEERING
<center>
GENERAL SEATS:<input type="number" name="ECEtot" min="3" max="50" value="5">
RESERVED SEATS:<input type="number" name="ECEres" min="1" max="50" value="2">
</center><br><br><br>
<center>
<input type="submit" value="SAVE">

</center>

</form>
</td>
</tr>
</table>
</body>
</html>