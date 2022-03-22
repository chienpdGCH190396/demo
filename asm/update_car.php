<?php 
require_once 'header.php';
$id = $_POST['id'];
$qry = "SELECT * FROM car WHERE car_id = '$id'";
$result = querySQL($qry);
$row = mysqli_fetch_array($result);
$name = $row['car_name'];
$model = $row['car_model'];
$price = $row['car_price'];
$image = $row['car_image'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $model = $_POST['model'];
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
    $image = $model . "_" . $price . "." . $extension;
    //thiết lập địa chỉ file ảnh cần di chuyển đến
    $image_folder = "images/cars/";
    $destination = $image_folder . $image;
    //di chuyển file ảnh từ đường dẫn tạm thời đến địa chỉ đã thiết lập
    move_uploaded_file($temp_name, $destination);
} 
else { //người dùng không update ảnh => lấy lại ảnh cũ
    $image =  $row['car_image'];
}
$query12 = "UPDATE car SET car_name = '$name', car_price = '$price', 
          car_model = '$model', car_image = '$image' 
          WHERE car_id = '$id'";
$result12 = querySQL($query12);
if ($result12) { ?>
  <script>
      alert("Update successfully !");
      window.location.href = "manage_car.php";
  </script>
<?php } else { ?>
    <script>
      alert("Update failed !");
      window.location.href = "manage_car.php";
  </script>
<?php } } ?>
<center>
<form class="frm123" action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend> Update car </legend>
        Name: <input type="text" required maxlength="100" size="35"
               name="name" value="<?= $name ?>"> <br> <br>
        
        Model:  
        <?php
        $sql = "SELECT * FROM model";
        $run = querySQL($sql); 
        ?>
        <select name="model">
        <?php
        while ($row1 = mysqli_fetch_array($run)) { 
            if ($row1['model_id'] == $model) { ?>
                <option value='<?= $model ?>' selected> <?= $row1['model_name'] ?> </option>
            <?php } else { ?>
                <option value='<?= $row1['model_id'] ?>'> <?= $row1['model_name'] ?> </option>
            <?php } } ?>
        </select> 
        <br> <br>

        Price: <input type="number" required maxlength="10" size="12"
               name="price" value="<?= $price ?>"> <br> <br>

        Image: <img src='images\cars\<?= $image ?>' width="150" height="150" ><br>
        <input type="file" name="image" accept="images/*"> <br> <br>
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit" value="Update" name="update">
    </fieldset>
</form>
</center>