<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP CRUD Operation</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="container">
   	<form action="#" method="POST">
      <div class="title">
      Registration Form
   </div>
      <div class="form-container">
            <div class="input-name">
               <i class="fa fa-user"></i>
               <input type="text" placeholder="First Name"class="text-name" name="fn" required>
               <span>
               <i class="fa fa-user"></i>
               <input type="text" placeholder="Last Name"class="text-name" name="ln" required>

               </span>
            </div>
            
            <div class="input-name">
               <i class="fa fa-user"></i>
               <input type="text" placeholder="Father's Name"class="text-name" name="father" required>
            </div>
            
            <div class="input-name">
               <i class="fa fa-user"></i>
               <input type="text" placeholder="Mother's Name"class="text-name" name="mother" required>
            </div>
            
            <div class="input-name">
               <i class="fa fa-phone"></i>
               <input type="phone no." placeholder="phone no."class="text-name" name="phone" required>
            </div>
            
            <div class="input-name">
               <i class="fa fa-envelope email"></i>
               <input type="Email" placeholder="Email"class="text-name" name="email" required>
            </div>
            
            <div class="input-name">
               <i class="fa fa-lock lock"></i>
               <input type="User Id" placeholder="User Id"class="text-name" name="userid" required>
            </div>
            
            <div class="input-name">
               <i class="fa fa-lock lock"></i>
               <input type="password" placeholder="password"class="text-name" name="password" required>
            </div>
            
            <div class="input-name">
               <i class="fa fa-lock lock"></i>
               <input type="password" placeholder="Confirm password" class="text-name" name="conpassword" required>
            </div>
            
            <div class="input-name">
            	<label>Gender</label>
            	<div class="custom_select">
               <select name="gender" required>
               	  <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
               </select>
            </div>
            
            <div class="input-name">
               <select class="country" name="con" required>
                  <option>select a country</option>
                  <option>india</option>
                  <option>america</option>
                  <option>rusia</option>
                  <option>china</option>
                  <option>africa</option>
                  <option>USA</option>
               </select>
               <div class="arrow"></div>
            </div>
            
            <div class="input-name">
               <input type="checkbox" class="check-button"required>
               <label>I accept all terms and condition</label>
            </div>
            <div class="input-name">
               <input type="submit" value="submit" class="button" name="submit">

            </div>

      </div>
    </form>

   </div>
   
</body>
</html>


<?php
 if($_POST['submit'])
   {
       $fn= $_POST['fn'];
       $ln= $_POST['ln'];
       $fan= $_POST['father'];
       $mon= $_POST['mother'];
       $pn= $_POST['phone'];
       $em= $_POST['email'];
       $ui= $_POST['userid'];
       $pwd= $_POST['password'];
       $cpwd= $_POST['conpassword'];
       $gender= $_POST['gender'];
       $con= $_POST['con'];

      $query="insert into student_bcab values('$fn','$ln','$fan','$mon','$pn','$em','$ui','$pwd','$cpwd','$gender','$con')";
      $qu=mysqli_query($conn,$query);
      if($qu)
      {
       echo "record inserted";
      }
  
   else
   {
      echo "All Field Required";
   }
}

?>







