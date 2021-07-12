<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home1</title>
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

  /* Green */
  .success {
    border-color: #4CAF50;
    color: green;
  }

  .success:hover {
    background-color: #4CAF50;
    color: white;
  }
  /* Blue */
  .info {
    border-color: #2196F3;
    color: dodgerblue
  }

  .info:hover {
    background: #2196F3;
    color: white;
  }
  /* Make the image fully responsive */
  .carousel-inner img {
    height: 450px;
  }
  </style>

</head>
<body>
  <!---logo display--->
  <section>
    <div class="row">
    <div class="col-sm-5">
      <img src="Images/pic1.png" alt="nai" class="text-center rounded" >
    </div>
    <!----menu ------>
    <div class="col-sm-5">
      <a class="btn info float-right" href="login.php">Sign in</a>
      <a class="btn success float-right" href="signup.php">Register</a>
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
  <div class="row">
    <div class="col">
      <section>
        <div class="container">
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <img src="Images/Sharing Food.jpg" alt="boi" height="250" width="200">
          </button>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <a href="signup.php">Register</a>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <a href="login.php">Already registered? Then Sign in</a>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div  class="col">
      <section>
        <div class="container">
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <img src="Images/clothes.jpg" alt="boi" height="250" width="200">
          </button>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <a href="#">Register</a>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <a href="login.php">Already registered? Then Sign in</a>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div  class="col">
      <section>
        <div class="container">
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <img src="Images/books.jpg" alt="boi" height="250" width="200">
          </button>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <a href="#">Register</a>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <a href="login.php">Already registered? Then Sign in</a>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div  class="col">
      <section>
        <div class="container">
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <img src="Images/fur.jpg" alt="boi" height="250" width="200">
          </button>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <a href="#">Register</a>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <a href="login.php">Already registered? Then Sign in</a>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
