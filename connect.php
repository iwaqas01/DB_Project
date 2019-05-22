<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$serverName = "ADMINRG-RVCVKV8\SQL"; 
$connectionInfo = array( "Database"=>"bloodbank");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) 
{
     echo "Connection established.<br />";
}
else
{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
</body>
</html>