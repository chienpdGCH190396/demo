<?php
require_once 'header.php';

$id = $_POST['id'];
if (isset($_POST['update'])) {
$name = $_POST['name'];
$sql = "UPDATE model SET model_name = '$name' WHERE model_id = '$id'";
$run = querySQL($sql);
if ($run) { ?>
   <script type="text/javascript">
		alert ("Update model successfully !");
		window.location.href = "manage_model.php";
   </script>
<?php 
} else { ?>
  <script type="text/javascript">
		alert ("Update model failed !");
		window.location.href = "manage_model.php";
  </script>
<?php } } ?>
<center>
<form class="frm123" action="" method="POST">
	<fieldset>
	<legend>Update model</legend>
	Model name:
	<?php
	$qry = "SELECT * FROM model WHERE model_id = '$id'";
	$result = querySQL($qry);
	$cls = mysqli_fetch_array($result);
	?>
	<input type="hidden" name="id" value="<?= $cls[0] ?>">
	<input type="text" name="name" value="<?= $cls[1] ?>" size="30"> <br><br>
	<input type="submit" name="update" value="Update">
    </fieldset>
</form>
</center>