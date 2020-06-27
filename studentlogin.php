
<?php
require('db.php');
 session_start();

// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM student WHERE username='$username'
and password='$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            
     header("location: studui.php");
     
         }else{
 echo "<script>
 if(!alert('INCORRECT PASSWORD')) {
    window.location.href = 'homepage.php'
}
 </script>";

}
 }
 ?>
    