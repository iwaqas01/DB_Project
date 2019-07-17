<?php 
require 'connect.php';
session_start();

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
        .signup-content1
        {
            padding-top: 60px;
        }
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content1">
                    <form method="POST" id="signup-form" class="signup-form" action="edit.php">
                        <h2 class="form-title">Update Details</h2>
                        <div class="row">
                      <?php
                     $id=$_GET['user'];
                      $sql = "SELECT donor.name AS name, donor.email AS email,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor.password AS password,donor.id AS id,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor_details.id=donor.id WHERE donor.id='$_GET[user]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }

                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                
                              echo '<div class="form-group col-md-6">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Name" value='.$row['name'].'>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" value='.$row['email'].'>
                        </div>
                        <div class="form-group col-md-6 text-muted">
                            Gender: <br>';
                            if ($row['gender'] == 'Male') 
                            {
                                echo '<input type="radio" name="gender" value="Male" checked> Male <br>
                            <input type="radio" name="gender" value="Female"> Female <br>
                        </div>';
                            }
                            elseif ($row['gender'] == 'Female') 
                            {
                                echo '<input type="radio" name="gender" value="Male"> Male <br>
                            <input type="radio" name="gender" value="Female" checked> Female <br>
                        </div>';
                            }
                            else
                            {
                         '<div class="form-group col-md-6">
                            <input type="Number" class="form-input" name="age" id="age" placeholder="Age" maxlength="2" value='.$row['age'].' >
                        </div>
                          <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="phone" id="phone" placeholder="Phone" value='.$row['phone'].'>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-input" name="quantity" id="quantity" placeholder="Quantitiy" value='.$row['quantity'].'>
                        </div>
                        <div class="form-group col-md-12 text-muted">
                            <label>Blood Group:</label>
                            <select class="form-control col-md-12 text-muted" name="blood">
                                <option value=" " selected>Choose..</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                         <div class="form-group col-md-12">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address" value='.$row['address'].'>
                        </div>
                         <div class="form-group col-md-12">
                            <input type="text" class="form-input" name="branch" id="branch" placeholder="Blood Bank Branch" value='.$row['branch'].'>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password" value='.$row["password"].'>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                         </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
                        </div>';
                    }
                            }
                            sqlsrv_free_stmt( $stmt);
                     ?>
                     </div>
                    </form>
                   
               
                </div>
            </div>
        </section>

    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
   
</body>
</html>