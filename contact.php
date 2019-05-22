<?php 
require 'connect.php';
    if (isset($_POST['submit'])) 
    {
        $name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['msg'];
$sql = "INSERT INTO contact (c_name,c_email,c_message) VALUES (?,?,?)";
$params = array($name,$email,$message);

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) 
{
     die( print_r( sqlsrv_errors(), true));
}
else
{
    echo "done";
    header("Location: index.php");
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
         label
         {
            padding-left: 10px;
         }
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="contact.php">
                        <h2 class="form-title">Contact Us</h2>
                        <div class="form-group">
                         <input type="text" class="form-input" name="name" id="name" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group text-muted">
                            <label for="comment">Feedback:</label>
                            <textarea class="form-control" rows="3" id="comment" name="msg"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Send feedback"/>
                        </div>
                    </form>
                    <p class="loginhere">
                      
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
      <!--   <script type="text/javascript">
            $("form").submit(function(){
                alert("Thanks for your response");
            });
        </script> -->

</body>
</html>