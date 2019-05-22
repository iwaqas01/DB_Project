<?php require 'connect.php';
  if (isset($_POST['submit'])) 
    {
        $name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$date=date("Y-m-d h:i:sa");
$sql = "INSERT INTO donor (name,email,password,date) VALUES (?,?,?,?)";
$params = array($name,$email,$password,$date);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) 
{
     die( print_r( sqlsrv_errors(), true));
}
else
{
    echo "done";
    echo $name,$email,$password,$date;
    header("Location: details.php");
}
    
}
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Bank</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="index.php">
                        <h2 class="form-title">Donor Registration</h2>
                        <div class="form-group">
                         <input type="text" class="form-input" name="name" id="name" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Already have an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <?php

    ?>
</body>
</html>