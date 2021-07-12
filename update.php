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
    <h1>Update Profile</h1>
    <p>Please edit this form to update your account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="name" />
    <label for="usr"><b>Contact</b></label>
    <input type="text" placeholder="Enter Contact Number" name="usr" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label for="uploadfile"><b>Upload Image</b></label><br></br>
    <input type = "file" name = "uploadfile" required />

    <hr>

    <input type="submit" class="registerbtn" name="upd" value="Update">
  </div>

</form>


<?php
include("connection.php");
error_reporting(0);
session_start();
$em = $_SESSION['email'];
if($_POST['upd'])
{
  $us = $_POST['usr'];
  $pw = $_POST['psw'];
  $nm = $_POST['name'];
  $filename =  $_FILES["uploadfile"]["name"];
  $tmpname =  $_FILES["uploadfile"]["tmp_name"];
  $folder = "user/".$filename;
  move_uploaded_file($tmpname,$folder);
  if( $us!="" && $pw!="" && $nm!="" && $filename!="")
  {
    $query = "UPDATE register SET name = '$nm', contact = '$us', password = '$pw',picsource = '$folder'  where email = '$em'";
    mysqli_query($conn, $query);
    $_SESSION['email'] = $em;
    $_SESSION['password'] = $pw;
    header("location:profile.php");
  }
}
?>

</body>
</html>
