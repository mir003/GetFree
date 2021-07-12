<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hahahah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
  .btn {
    border: 2px solid black;
    border-radius: 5px;
    background-color: white;
    color: black;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
  }
  /* Make the image fully responsive */
  .carousel-inner img {
    height: 450px;
  }
  </style>

</head>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <p>info1</p>
      <p>info1</p>
      <p>info1</p>
      <p>info1</p>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
session_start();
include 'connection.php';
error_reporting(0);
$name = $_SESSION['email'];
$psw = $_SESSION['password'];
if($name==false)
{
  header('location:login.php');
}
$query = "select * from register";
$data =  mysqli_query($conn,$query);
?>
<div class="row">
  <?php

for ($x = 0; $x <= 3; $x++) {
    $result = mysqli_fetch_assoc($data);
    ?>
    <div class="col">
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
            <img src='<?php echo $result['picsource'];  ?>' alt="picture" height="200" width="200">
          </button>
        </div>
<?php
}
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
