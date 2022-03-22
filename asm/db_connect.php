<?php 
//Thông tin kết nối đến database
$hostname = 'localhost';
$dbport = 3306;
$dbname = 'cardb';
$username = 'root';
$password = '';

//Thiết lập kết nối đến DB
$connection = new mysqli($hostname, $username, $password, 
	$dbname, $dbport);
if ($connection->connect_error) {
	die($connection->connect_error); //hiển thị lỗi kết nối
} 
?>