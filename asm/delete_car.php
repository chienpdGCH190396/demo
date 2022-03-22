<?php
require_once 'header.php';
$id = $_POST['id'];
$qry = "DELETE FROM car WHERE car_id = '$id'";
$result = querySQL($qry);
if ($result) { ?>
 <script>
     alert ("Delete car successfully !");
     window.location.href = "manage_car.php";
 </script>
<?php } else { ?> 
  <script>
    alert ("Delete car failed !");
    window.location.href = "manage_car.php";
</script>
<?php } ?>