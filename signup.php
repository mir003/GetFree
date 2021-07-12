<?php
  include("connection.php");
  error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://m...content-available-to-author-only...n.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<form action ="" method = "post" enctype="multipart/form-data">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="usr"><b>Contact</b></label>
    <input type="text" placeholder="Enter Contact Number" name="usr" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label for="uploadfile"><b>Upload Image</b></label><br></br>
    <input type = "file" name = "uploadfile" required />

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input type="submit" class="registerbtn" name="reg" value="Register">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

<?php
include("connection.php");
error_reporting(0);
if($_POST['reg'])
{
  $em = $_POST['email'];
  $us = $_POST['usr'];
  $pw = $_POST['psw'];
  $nm = $_POST['name'];
  $filename =  $_FILES["uploadfile"]["name"];
  $tmpname =  $_FILES["uploadfile"]["tmp_name"];
  $folder = "user/".$filename;
  move_uploaded_file($tmpname,$folder);
  if($em!="" && $us!="" && $pw!="" && $nm!="" && $filename!="")
  {
    $query = "select * from register where email='$em' ";
    $data =  mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
      echo "Already registered with this Email";
      #header(location:signup.php);
    }
    else {
      $query = "INSERT INTO register VALUES('$nm', '$em', '$us', '$pw', '$folder')";
      mysqli_query($conn, $query);
    }
  }
}
?>




</body>
</html>
