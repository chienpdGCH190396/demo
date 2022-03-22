<?php
require_once 'header.php';
//kiểm tra người dùng đã bấm nút Add chưa
//nếu đã bấm rồi thực thi câu lệnh SQL
//ngược lại skip code PHP và hiển thị form
if (isset($_POST['add'])) {
$name = $_POST['name'];
$sql = "INSERT INTO model (model_name) VALUES ('$name')";
$run = querySQL($sql);
if ($run) { ?>
  <script>
      alert("Add model successfully !");
      window.location.href = "manage_model.php";
  </script>
<?php } else { ?>
   <script>
       alert("Add model failed !");
       window.location.href = "manage_model.php";
   </script>
<?php } } ?>
<center>
    <form style="width: fit-content; margin-top: 30px;" 
          action="add_model.php" method="POST">
        <fieldset>
            <legend>Add model</legend>
        Model Name: <input type="text" name="name" required maxlength="30"> 
        <br><br>
        <input type="submit" value="Add" name="add">
        </fieldset>
    </form>
</center>