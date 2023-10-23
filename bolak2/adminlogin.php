<?php
session_start();
if (isset($_SESSION["myadmin"])) {
   header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/rose.png">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginform.css">
</head>
<body>
    <style>
        .logo{
            width: 45px;
            cursor: pointer;
            margin-top: 10px;
            margin-right:30rem
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

         h1 {
            display: flex;
            align-items: center;
            margin: 0;
        }
        a{
            color: #e84393;
            text-decoration:none;
        }
        .btn-primary{
            background:#e84393;
            border:none;
        }
        .btn-primary:hover{
            background:black;
        }
        body{
            background: white;   
        }
    </style>
    <div class="container">
        <nav>
        <h1>ADMIN</h1>  <img src="images/rose.png" class="logo"> 
        </nav>
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM myadmin WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $myadmin = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($myadmin) {
                if (password_verify($password, $myadmin["password"])) {
                    session_start();
                    $_SESSION["myadmin"] = "yes";
                    header("Location: admin.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
    
      <form action="adminlogin.php" method="post">
        <div class="form-group">    
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Login as<a href="login.php" class="links">User</a></p></div>
     <div><p>Back to <a href="head.php">Home</a></p></div>  
      
     <div><p>Not registered yet <a href="adminregister.php">Register Here</a></p></div>
    </div>
</body>
</html>