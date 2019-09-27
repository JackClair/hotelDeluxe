<?php
$mysql_user = 'root';
$mysql_host = 'localhost';
$dbname = 'dbhotel';
$mysql_password = '';
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>
