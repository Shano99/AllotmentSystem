<!DOCTYPE html>
<html>
<head>
	<title>EDIT REGISTRATION FORM</title>
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
<h1><center><font color="  #00004d">REGISTRATION FORM </h1>
	<br><br>
<form name="myForm" action="processeditreg.php"  method="POST">
<table align="center" cellpadding = "10" style="font-size: 20px;">
 
<!----- Name ---------------------------------------------------------->
<tr>
<td> NAME</td>
<td><input type="text" name="name" required />
</td>
</tr>
 
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" name="dob" required>
</td>
</tr>
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
<input type="radio" name="Gender" value="Male" required />Male<br>
<input type="radio" name="Gender" value="Female" />Female<br>
<input type="radio" name="Gender" value="Other" />Other<br>
</td>
</td>
</tr>



<!----- Address ---------------------------------------------------------->
<tr>
<td>PERMANENT ADDRESS <br /><br /><br /></td>
<td><textarea name="address" rows="4" cols="30" required></textarea></td>
</tr>
 
<!----- ACADEMIC---------------------------------------------------------->


 
 
<tr>
<td>SCHOOL NAME</td>
<td><input type="text" name="school" maxlength="50" required /></td>

</tr>
 
<tr>
<td>HIGH SCHOOL SCORE(out of 100)</td>
<td><input type="numer" name="score"   required /></td>
</tr>
 
<tr>
<td>REGISTRATION ID</td>
<td><input type="number" name="regno"  required  /></td>
</tr>
 
 <!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center" style="font-size: 30px">
<input type="submit" value="Submit" >

</td>
</tr>
</table>
 
</form>
 

</body>
</html>