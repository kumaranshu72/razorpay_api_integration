<?php
$mysql_host = "localhost";
$mysql_password = "";
$mysql_user = "root";
$mysql_database = "utkarsh";
$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
if(!$conn && !mysqli_select_db($conn, $mysql_database))
{
	die($conn->connect_error);
}
?>
