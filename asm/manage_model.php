<?php
require_once 'header.php';
$sql = "SELECT * FROM model";
$result = querySQL($sql);
?>
<center>
<table class='tbl' border=1>
    <tr>
        <th> Model ID </th>
        <th> Model Name </th>
        <th> Options </th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
    $id = $row['model_id']; //$row[0] (cột 1)
    $name = $row['model_name']; //$row[1] (cột 2) ?>
    <tr>
        <td> <?= $id ?> </td>
        <td> <?= $name ?> </td>
        <td> 
            <form class='frm_inline' action="update_model.php" method="POST">
                <input type='hidden' name='id' value='<?= $id ?>'>
                <input type='submit' value='Update'>
            </form>
            <form class='frm_inline' action='delete_model.php' method="POST" onsubmit="return confirmDelete();">
                <input type='hidden' name='id' value='<?= $id ?>'>
                <input type='submit' value='Delete'>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
</center>
<script>
    function confirmDelele() {
        var del = confirm("Do you want to delete this model ?");
        if (del)
            return true;
        else
            return false;
    }
</script>