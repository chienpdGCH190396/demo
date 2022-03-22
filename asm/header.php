<?php
require_once 'functions.php';
//require_once 'restricted.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Lamborghini Store</title>
	<link rel="stylesheet" type="text/css" href="css\style_admin.css?version=5">
  <meta charset="utf-8">
</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Cars</a>
    <div class="dropdown-content">
      <a href="./manage_car.php">Manage cars</a>
      <a href="add_car.php">Add car</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Models</a>
    <div class="dropdown-content">
      <a href="manage_model.php">Manage models</a>
      <a href="add_model.php">Add model</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">User</a>
    <div class="dropdown-content">
      <a href="manage_user.php">Manage user</a>
      <a href="add_user.php">Add user</a>
    </div>
  </li>
  <li><a onclick="about();">About</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<script type="text/javascript">
  function about() {
    alert("Powered by Pham Duc Chien");
  }
</script>
</body>
</html>