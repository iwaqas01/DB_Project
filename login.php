<?php 
require 'connect.php';
if (isset($_POST['submit'])) 
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select="SELECT * FROM donor WHERE email=".$email." "AND" password=".$password." ";
     $stmt = sqlsrv_query( $conn, $select );
   if( $stmt === false) 
    {
     die( print_r( sqlsrv_errors(), true) );
    }
    else
    {
       echo $_SESSION['username']=$email;
       header("Location: index.php");
    }
}
else
{

}
include 'nav.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .signup-content1
        {
            padding-top: 130px;
        }
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content1">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login</h2>
                       <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Don't have an account ? <a href="index.php" class="loginhere-link">Signup here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>