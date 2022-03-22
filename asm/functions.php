<?php
require_once "db_connect.php";

//Tạo hàm để chạy câu lệnh SQL
function querySQL ($qry) {
	global $connection; //set "$connection" thành biến toàn cục (global)
	$result = $connection->query($qry);
	if (!$result) {
		die($connection->error);
	}
	return $result;
}

//khởi tạo 2 biến string chứa ký tự đặc biệt dùng để mã hóa  
$key1 = "$*%(@#";
$key2 = "()#*$!";

//tạo hàm để mã hóa mật khẩu
function encryptPassword ($password) {
	global $key1;
	global $key2;
	//tạo biến $token để lưu pass đã mã hóa
	//note: 'ripemd128' là thuật toán mã hóa
	$token = hash("ripemd128","$key1$password$key2");
	return $token;
}

?>