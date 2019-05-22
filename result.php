<?php require 'connect.php'; ?>
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
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
               
            </div>
        </section>

    </div>          
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
<?php
$q=$_GET['q'];
$sql = "SELECT donor.name AS name, donor.email AS email,donor.date AS date,donor_details.gender AS gender,donor_details.age AS age,donor_details.phone AS phone,donor_details.address AS address,donor_details.blood AS blood,donor_details.quantity AS quantity FROM donor,donor_details WHERE blood='".$q."' ";
                            $stmt = sqlsrv_query( $conn, $sql );
                            if( $stmt === false) 
                            {
                            die( print_r( sqlsrv_errors(), true) );
                            }
                            echo "<table>
                            <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Blood</th>
                            <th>Quantity</th>
                            </tr>";
                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) 
                            {
                            
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['age'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['blood'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            sqlsrv_free_stmt( $stmt);


?>
</body>
</html>