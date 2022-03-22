<?php
require_once 'header.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    //kiểm tra xem mẫu xe cần xóa có tồn tại xe này không 
    $sql1 = "SELECT * FROM car WHERE car_model = '$id'";
    $run1 = querySQL($sql1);
    if ($run1->num_rows > 0) { ?>
        <script>
        alert("Delete model failed !");
        window.location.href = "manage_model.php";
    </script>
    <?php 
    } else {
    //xóa mẫu xe sau khi đã kiểm tra điều kiện
    $sql2 = "DELETE FROM model WHERE model_id = '$id'";
    $run2 = querySQL($sql2); ?>
        <script>
            alert("Delete model successfully !");
            window.location.href = "manage_model.php";
        </script>
    <?php } 
} 
?>