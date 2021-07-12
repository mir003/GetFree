<?php
session_start();
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div align="center">
  <h1>Sign in</h1>
  <hr>
</div>
<div class="container" id="login">
<form action="" method="post">
    <label for="email"><b>Email</b></label>
    <input  type="text" placeholder="Enter Email" name="email" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button name="submit" type="submit" class="registerbtn" value="Login">Sign in</button>
</form>
</div>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "select * from register where password = '$password' AND email='$email' ";
    $data =  mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      header("location:home2.php");
    }
    else
    {
      echo "Sign in failed";
    }

}
 ?>
