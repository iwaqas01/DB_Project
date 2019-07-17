<?php
require 'connect.php';
session_start();
if (isset($_SESSION['name'])) 
{
     session_destroy();
     header("Location: login.php");
}
else
{
	header("Location: index.php");	
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>