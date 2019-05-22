<?php require 'connect.php';
include 'nav.php'; ?>
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
    .signup-content2
    {
        padding-top: 40px;
    }
</style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content2">
                    <form method="POST" id="signup-form" class="signup-form" action="details.php">
                        <h2 class="form-title">Additional Information</h2>
                        <div class="row">
                            <?php 
                            $sql = "SELECT TOP 1 * FROM donor ORDER BY id DESC";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }

                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                            echo '<div class="form-group col-md-6">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Name" readonly value='.$row["name"].'>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" readonly value='.$row["email"].'>
                        </div>';
                            }

                            sqlsrv_free_stmt( $stmt);
                            ?>                     
                        <div class="form-group col-md-6 text-muted">
                            Gender: <br>
                            <input type="radio" name="gender" value="Male" checked> Male <br>
                            <input type="radio" name="gender" value="Female"> Female <br>
                        </div>
                         <div class="form-group col-md-6">
                            <input type="Number" class="form-input" name="age" id="age" placeholder="Age" maxlength="2" />
                        </div>
                          <div class="form-group col-md-6">
                            <input type="tel" class="form-input" name="phone" id="phone" placeholder="Phone"/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="Number" class="form-input" name="quantity" id="quantity" placeholder="Quantitiy"/>
                        </div>
                        <div class="form-group col-md-12 text-muted">
                            <label>Blood Group:</label>
                            <select class="form-control col-md-12 text-muted" name="group">
                                <option selected>Choose..</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select>
                        </div>
                         <div class="form-group col-md-12">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address"/>
                        </div>
                        <?php 
                            $sql = "SELECT TOP 1 * FROM donor ORDER BY id DESC";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) {
                            die( print_r( sqlsrv_errors(), true) );
                            }

                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                            echo '<div class="form-group col-md-12">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" readonly value='.$row["password"].'>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>';
                            }

                            sqlsrv_free_stmt( $stmt);
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Already have an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
 <?php
if (isset($_POST['submit'])) 
{
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$qty=$_POST['quantity'];
$blood=$_POST['group'];
$address=$_POST['address'];
$sql = "INSERT INTO donor_details (gender,age,phone,address,blood,quantity) VALUES (?,?,?,?,?,?)";
$params = array($gender,$age,$phone,$address,$blood,$qty);
$stmt = sqlsrv_query( $conn, $sql,$params);
if( $stmt === false ) 
{
     die( print_r( sqlsrv_errors(), true));
}
else
{
    echo "done";
}
    
}
?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>