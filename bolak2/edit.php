<?php
  include "connection.php";
  $id="";
  $name="";
  $email="";
  $phone="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:bolak1/index.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from floweritems where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: bolak1/index.php");
      exit;
    }
    $id=$row["id"];
    $name=$row["name"];
    $price=$row["price"];
    $description=$row["description"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $price=$_POST["price"];
    $description=$_POST["description"];

    $sql = "update floweritems set id='$id', name='$name', price='$price', description='$description' where id='$id'";
    $result = $conn->query($sql);
    if($result){
      echo "Data edited successfully!";
  } else {
      echo "Data insertion failed!";
  }
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>EDIT | Niels Bulakan</title>

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
    .bg-warning {
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/rose.png" class="logo">NIELS <span style="color:#e84393;">BULAKAN</span></a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="margin-bottom:5px;">Product List</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Flowers </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

 <label> PRICE: </label>
 <input type="text" name="price" value="<?php echo $price; ?>" class="form-control"> <br>

 <label> DESCRIPTION: </label>
 <input type="text" name="description" value="<?php echo $description; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit" href="index.php"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>