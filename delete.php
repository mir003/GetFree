<?php

error_reporting(0);
include('connection.php');
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
<div align="center">
  <h1>Delete Account</h1>
  <hr>
</div>
<div class="container" id="login">
<form action="" method="post">
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Confirm password" name="password" required>
    <button name="submit" type="submit" class="registerbtn" value="Login">confirm</button>
</form>
</div>

</body>
</html>

<?php
error_reporting(0);
include('connection.php');
session_start();
if(isset($_POST['submit']))
{
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $query = "select * from register where password = '$password' AND email='$email' ";
    $data =  mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
      $query = "DELETE FROM register where email = '$email'";
      $data = mysqli_query($conn,$query);
      header("location:home1.php");
    }
    else
    {
      echo "Wrong Password";
    }

}
 ?>
