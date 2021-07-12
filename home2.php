<?php
session_start();
error_reporting(0);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home2</title>
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
<body>
  <section>
    <div class="row">
      <!---logo display--->
      <div class="col-sm-5">
        <img src="Images/pic1.png" alt="nai" class="text-center rounded" >
      </div>
    <!----menu ------>
      <div class="dropdown col-sm-5">
        <button type="button" class="btn btn-primary dropdown-toggle float-right" data-toggle="dropdown">
          Menu
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="profile.php">User Profile</a>
          <a class="dropdown-item" href="home2.php">Home</a>
          <a class="dropdown-item" href="upload_photo.php">Upload Photo</a>
          <a class="dropdown-item" href="update.php">Update Profile</a>
          <a class="dropdown-item" href="delete.php">Delete Account</a>
          <a class="dropdown-item" href="logout.php">Sign Out</a>
        </div>
      </div>
      <!----category ------>
      <div class="dropdown">
        <button type="button" class="btn btn-info dropdown-toggle float-left" data-toggle="dropdown">
          Category
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Food items</a>
          <a class="dropdown-item" href="#">Clothings</a>
          <a class="dropdown-item" href="#">Books</a>
          <a class="dropdown-item" href="#">Furnitures</a>
        </div>
      </div>
  </section>


<!--featured photos-->

<section>
  <div id="demo" class="carousel slide text-center" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/Sharing Food.jpg" alt="share your foods" width="1200" height="500">
        <div class="carousel-caption">
          <h3>Share Foods and Spread Smiles!!</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/clothes.jpg" alt="share your clothes" width="1200" height="500">
        <div class="carousel-caption">
          <h3 class="text-info">Donate Clothings!!</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/books.jpg" alt="share your books" width="1200" height="500">
        <div class="carousel-caption">
          <h3 class="text-info">Spread the light of wisdom !!</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/fur.jpg" alt="share your furnitures" width="1200" height="500">
        <div class="carousel-caption">
          <h3 class="text-info">Donate unused Furnitures!! </h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</section>
<!------recent uploads---------------------->
<section>
  <!-- The Modal -->

  <?php

  $query = "select * from picture";
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
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <?php
                  echo "Info: ".$result['info']."<br>";
                  echo "Category: ".$result['category']."<br>";
                  echo "Location: ". $result['location']."<br>";
                  echo "Uploaded Date: ".$result['date']."<br>";
                   ?>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
  <?php
  }
  ?>
  </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
