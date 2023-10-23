<?php
include "connection.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $q = "INSERT INTO `floweritems`(`id`, `name`, `price`, `description`) VALUES ('$id', '$name', '$price', '$description')";
   
    $result = mysqli_query($conn, $q);
    if($result){
      echo "Data inserted successfully";

    }else{
      echo"Data insertion failed";
    }
    }

?>

<!DOCTYPE html>
<html>
<head>



 <title>ADD | Niels Bulakan</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/rose.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <style>
    .logo{
    width: 40px;
    cursor: pointer;
    margin-left:2rem;
    }
    .bg-dark {
    background-color: #212529!important;
    }
    .bg-primary {
     background-color:#e84393!important;
     border-color: #e84393;
    }
    .btn-success {
    color: #fff;
    background-color: black;
    border-color: black;
    }
    .btn-success:hover{
      background:#e84393;
      border-color: #e84393;
    }
    .btn-info {
    color: #fff;
    background-color: black;
    border-color: black;
    }
    .btn-info:hover{
      background:#e84393;
      border-color: #e84393;
    }
    </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/rose.png" class="logo">NIELS <span style="color:#e84393;">BULAKAN</span></a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="margin-bottom:5px;">Home</a>
            </li>
            <li class="nav-item">
            </li>

          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Add New Product </h1>
 </div><br>

 <label style="margin-left:10px;"> ID: </label>
 <input type="text" name="id" class="form-control"> <br>

 <label style="margin-left:10px;"> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label style="margin-left:10px;"> PRICE: </label>
 <input type="text" name="price" class="form-control"> <br>

 <label style="margin-left:10px;"> DESCRIPTION: </label>
 <input type="text" name="description" class="form-control"> <br>




 <button class="btn btn-success" type="submit" name="submit" > Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>