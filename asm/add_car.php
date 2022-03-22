<?php
require_once "header.php";   
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $image = "";
//đoạn code dùng để upload & xử lý ảnh
//kiểm tra người dùng đã chọn file ảnh có dung lượng khác 0
if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {	
    //khai báo biến dùng để lưu file ảnh vào đường dẫn tạm thời
    $temp_name = $_FILES['image']['tmp_name'];
    //khai báo biến dùng để lưu tên của ảnh
    $img_name = $_FILES['image']['name'];
    //tách tên file ảnh dựa vào dấu chấm
    $parts = explode(".", $img_name);
    //lấy ra extension (đuôi) file ảnh
    $extension = end($parts);
    //thiết lập tên mới cho ảnh
    $image = $price . "_" . $model . "." . $extension;
    //thiết lập địa chỉ file ảnh cần di chuyển đến
    $image_folder = "images/cars/";
    $destination = $image_folder . $image;
    //di chuyển file ảnh từ đường dẫn tạm thời đến địa chỉ đã thiết lập
    move_uploaded_file($temp_name, $destination);
}
$sql = "INSERT INTO car (car_name, car_price, car_model, car_image)
        VALUES ('$name', '$price', '$model', '$image')";
$run = querySQL($sql);
if ($run) { ?>
   <script>
       alert("Add car successfully !");
       window.location.href = "manage_car.php";
   </script>
<?php } }  ?>
<center>
<form style="width: fit-content; margin-top: 30px;" 
      action="" method="POST" enctype="multipart/form-data">

    <fieldset>
    <legend>Add car </legend>
    Name: <input type="text" name="name" required maxlength="50"> <br> <br>
    
    Model: 
    <?php
    $sql = "SELECT * FROM model";
    $run = querySQL($sql); ?>
    <select name="model">
    <?php
    while ($row = mysqli_fetch_array($run)) { ?>
        <option value='<?= $row['model_id'] ?>'> <?= $row['model_name'] ?> </option>
    <?php } ?>
    </select> 
    <br> <br>
    Price: <input type="number" name="price" required maxlength="10"> <br> <br>
    Image: <input type="file" name="image" required> <br> <br>
    <input type="submit" value="Add" name="add">
    </fieldset>
</center>
