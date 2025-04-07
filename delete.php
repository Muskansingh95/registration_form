<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head><title>Insert Demonstration1</title>
</head>
<body>
<form action="" method="POST">
<label>fn:</label><input type="text" name="fn">
<br>
<label>ln:</label><input type="text" name="ln">
<br>
<label>fan:</label><input type="text" name="father">
<br>
<br>
<label>mon:</label><input type="text" name="mother">
<br>
<br>
<label>pn:</label><input type="phone no." name="phone">
<br>
<br>
<label>em:</label><input type="Email" name="email">
<br>
<br>
<label>ui:</label><input type="User Id" name="userid" >
<br>
<br>
<label>pwd:</label><input type="password" name="password">
<br>
<br>
<label>cpwd:</label><input type="password" name="conpassword">
<br>
<br>
<label>gender:</label><input type="text" name="gender">
<br>
<br>
<label>con:</label><input type="text" name="con">
<br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
if($_POST['submit'])
{
   //$fn= $_POST['fn'];
   //$ln= $_POST['ln'];
   //$fan= $_POST['father'];
  // $mon= $_POST['mother'];
   //$pn= $_POST['phone'];
   //$em= $_POST['email'];
   $ui= $_POST['userid'];
  // $pwd= $_POST['password'];
   //$cpwd= $_POST['conpassword'];
   //$gender= $_POST['gender'];
   //$con= $_POST['con'];

  if($ui!="")
  {
     $query="delete from student_bcab where username='$ui'";
     $qu=mysqli_query($conn,$query);
     if($qu)
     {
      echo "record deleted";
     }
  }
  else
     {
     echo "not record deleted";
     }
}
?>