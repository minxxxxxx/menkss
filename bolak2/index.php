<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOOTSRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/rose.png">
    <title>VIEW | Niels Bulakan</title>
</head>
<body>
  <style>
    .btn-success{
      background-color: #e84393;
      border:none;
    }
    .btn-success:hover{
      background:black;
    }
    .btn-danger{
      border:none;
      background-color: black;
    }
    .btn-danger:hover{
      background: #e84393;
    }
    .logo{
    width: 40px;
    cursor: pointer;
    margin-left:2rem;
    }
    .nav-item a{
      background-image: linear-gradient(#e1adfa, #fcb4b4);
    }
    
  </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="admin.php"><img src="images/rose.png" class="logo">NIELS <span style="color:#e84393;"> BULAKAN</span></a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a style="background-color:#e84393; border:none;" type="button" class="btn btn-primary nav-link active" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>ITEMS</th>
        <th>PRICE</th>
        <th>DESCRIPTION</th>
        <th>PRODUCT ADDED</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from floweritems";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[price]</td>
        <td>$row[description]</td>
        <td>$row[added]</td>
        <td>
                  <a  class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?id=$row[id]' onclick='return confirm(\"Are you sure you want to delete this product?\");'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>