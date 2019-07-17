<?php require 'connect.php';
session_start();
include 'nav.php'; ?>
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
         .signup-content
         {
            padding-top: 150px;
         }
         table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
td
{
    text-align: center;
    font-weight: bold;
}
.container-fluid
{
    padding-right: 300px;
    padding-left: 300px;
}
    </style>
</head>
<body>

    <div class="main">

         <section class="signup">
            <div class="container-fluid">
                <div class="signup-content2">
                    <form method="POST" id="signup-form" class="signup-form" action="user.php">
                        <h2 class="form-title">User Information</h2>
                        <div class="row">
                            <?php 
                            if (isset($_SESSION['name'])) 
                            {
                                  $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<table class='table table-striped table-hover'>
                            <tr>
                            <th> Username </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['name']. "</td>";
                            }
                            echo "</tr>";

                            $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Email </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['email']. "</td>";
                            }
                            echo "</tr>";

                             $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Gender </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['gender']. "</td>";
                            }
                            echo "</tr>";


                             $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Age </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['age']. "</td>";
                            }
                            echo "</tr>";

                             $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Phone </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['phone']. "</td>";
                            }
                            echo "</tr>";

                             $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Address </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['address']. "</td>";
                            }
                            echo "</tr>";

                             $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Blood </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['blood']. "</td>";
                            }
                            echo "</tr>";

                             $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Quantity </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['quantity']. "</td>";
                            }
                            echo "</tr>";

                            $sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Blood Bank Branch </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['branch']. "</td>";
                            }
                            echo "</tr>";

                             $sql = "SELECT donor.name AS name, donor.email AS email,donor.password AS password,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity,donor_details.branch AS branch FROM donor INNER JOIN donor_details ON donor.id=donor_details.id WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<tr>
                            <th> Password </th>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                                echo "<td>" .$row['password']. "</td>";
                            }
                            echo "</tr>
                            </table>";

                            $sql = "SELECT TOP 1 donor.id AS id FROM donor,donor_details WHERE donor.name='$_SESSION[name]' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }

                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                            //    echo  '
                            // <a href="edit.php?user='.$row['id'].'" class="form-submit btn btn-danger"> Edit Details </a>
                            // </a>';
                            }

                           




                            sqlsrv_free_stmt( $stmt);
                            }

                            elseif (!isset($_SESSION['name'])) 
                            {
                                echo '<section class="signup">
            <div class="container-fluid">
                <div class="signup-content2">
                <p class="loginhere">
                        Haven&apos;t logged in yet ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                    </div>
                    </div>
                    </section>';
                            }
                            ?>                     
                        
                    
                       
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