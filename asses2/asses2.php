<?php
$server_NAME = 'localhost';
$user_name = 'root';
$user_password = '';
$dbName = 'bcar1';

// Create a connection
$con = mysqli_connect($server_NAME, $user_name, $user_password, $dbName);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch product details from the database
$qur = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_1'";
$exc = mysqli_query($con, $qur);
$detPro = mysqli_fetch_assoc($exc);

$qur2 = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_2'";
$exc2 = mysqli_query($con, $qur2);
$detPro2 = mysqli_fetch_assoc($exc2);

$qur3 = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_3'";
$exc3 = mysqli_query($con, $qur3);
$detPro3 = mysqli_fetch_assoc($exc3);


$qur4 = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_4'";
$exc4 = mysqli_query($con, $qur4);
$detPro4 = mysqli_fetch_assoc($exc4);

// Check if the query was successful
if (!$exc) {
    die("Query failed: " . $con->error); // This will show any SQL errors
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Product Details</title>
</head>

<body>
   
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 5rem;">Search</button>
    </form>
    </div>
        <div class="ml-auto">
            <a class="btn btn-success" href="#">Login</a>
            <a class="btn btn-primary" href="#">Sign Up</a>
        </div>
     
    
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="400pt" width="400pt" class="d-block w-100" src="nvidia-rtx-overview-bm-l580-d.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img height="400pt" width="400pt" class="d-block w-100" src="images (1).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img height="400pt" width="400pt" class="d-block w-100" src="nvidia-rtx-overview-bm-l580-d.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Product Details Section -->
    <div class="container mt-5">
        <h1>Product Details</h1>
        <div class="row">

            <div class="card" style="width: 18rem; ">
                <img src="<?= $detPro['ProImg'] ?>" class="card-img-top" alt="...">
                <a href=""></a>
                <div class="card-body">
                  
                    <h5 class="card-title"><?= $detPro['ProTitle'] ?></h5>
                    <p class="card-text"><?= $detPro['ProDes'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


            <div class="card" style="width: 18rem; ">
                <img src="<?= $detPro2['ProImg'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $detPro2['ProTitle'] ?></h5>
                    <p class="card-text"><?= $detPro2['ProDes'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;padding-top: 57px; ">
                <img src="<?= $detPro3['ProImg'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $detPro3['ProTitle'] ?></h5>
                    <p class="card-text"><?= $detPro3['ProDes'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card4" style="width: 15rem;padding-top: 48px;; ">
                <img src="<?= $detPro4['ProImg'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $detPro4['ProTitle'] ?></h5>
                    <p class="card-text"><?= $detPro4['ProDes'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>

<?php
// Close connection
$con->close();
?>