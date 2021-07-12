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
    <h1>Upload Photo</h1>
    <p>Please edit this form to upload picture.</p>
    <hr>

    <label for="cat"><b>Category</b></label>
    <input type="text" placeholder="Enter Category" name="cat" required>
    <label for="info"><b>Info</b></label>
    <input type="text" placeholder="Enter model number/item name" name="info" />
    <label for="loc"><b>Location</b></label>
    <input type="text" placeholder="Enter Location" name="loc" required>
    <label for="uploadfile"><b>Upload Image</b></label><br></br>
    <input type = "file" name = "uploadfile" required />

    <hr>

    <input type="submit" class="registerbtn" name="upl" value="Upload">
  </div>

</form>


<?php
include("connection.php");
error_reporting(0);
session_start();
$em = $_SESSION['email'];
$dt = date("d/m/Y");
if($_POST['upl'])
{
  $ct = $_POST['cat'];
  $in = $_POST['info'];
  $loc = $_POST['loc'];
  $filename =  $_FILES["uploadfile"]["name"];
  $tmpname =  $_FILES["uploadfile"]["tmp_name"];
  $folder = "upload/".$filename;
  move_uploaded_file($tmpname,$folder);
  if( $ct!="" && $in!="" && $loc!="" && $filename!="")
  {
    $query = "INSERT INTO picture VALUES('$em', '$folder', '$ct', '$in', '$loc', '$dt')";
    mysqli_query($conn, $query);
    $_SESSION['email'] = $em;
    header("location:profile.php");
  }
}
?>

</body>
</html>
