<?php
require_once 'header.php';

$qry = "SELECT * FROM car";
if (isset($_POST['search'])) {
	$keyword = $_POST['keyword'];
	$qry .= " WHERE car_name LIKE '%$keyword%' "; 
    $result = querySQL($qry);
   //không tìm thấy kết quả  
   if ($result->num_rows == 0) {  ?>
   <script>
	 alert("Car not found");
	 window.location.href = "";
   </script> 
   <?php } 
}
$result = querySQL($qry);
?>
<center>
<form class="frm123" action="" method="POST">
	<fieldset>
		<legend> Search car </legend>
		<input type="text" name="keyword" required maxlength="15"
	  	placeholder="Input name"> <br> <br>
		<input type="submit" value="Search" name="search">
	</fieldset>
</form>
<br><br>
<table class="tbl" border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Model</th>
		<th>Price</th>
		<th>Image</th>
		<th>Options</th>
	</tr>
		<?php 
		while($row = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td style="text-align: center;"><?php echo $row[0]; ?></td>
			<td style="text-align: center;"><?php echo $row[1]; ?></td>
			<?php
			//Hiển thị model name thay vì model id
			$qry1 = "SELECT * FROM model";
			$result1 = querySQL($qry1);
			while ($row1 = mysqli_fetch_array($result1)) {
				if ($row1["model_id"] == $row["car_model"]) {
					$model = $row1["model_name"];
				}
			}
			?>
			<td style="text-align: center;"><?= $model ?></td>
			</td>
			<td style="text-align: center;"><?php echo $row[3]; ?></td>
			<td style="text-align: center;"> 
			<img src='images\cars\<?= $row['car_image'] ?>' width="400px" height="200px"></td>
		    </td>
			<td> 
				<form class="frm_inline" action="update_car.php" method="POST">
					<input type="hidden" name="id" value="<?= $row[0] ?>">
					<input type="submit" value="Update">
			    </form>
				<form class="frm_inline" action="delete_car.php" method="POST"
				 onsubmit="return confirmDelete();">
					<input type="hidden" name="id" value="<?= $row[0] ?>">
					<input type="submit" value="Delete">
			    </form>
			</td>
		</tr>
		<?php } ?>
</table>
</center>
<script>
	function confirmDelete() {
		var del = confirm("Do you want to delete this car ?");
		if (del)
			return true;
		else
			return false;
	}
</script>