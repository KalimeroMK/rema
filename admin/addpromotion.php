<? require_once 'header.php'; ?>
<form action="process/processpromotion.php" method="post" >


    <div class="form-group">
        <label for="inputNaslov"><?php echo PROMOTION; ?> </label>
        <input type="text" class="form-control" id="inputNaslov" placeholder="<?php echo PROMOTION_TITLE; ?>" name="promotion">
    </div>
    <br />



    <button type="submit" class="btn btn-default">Submit</button>
</form>  

<div class="clearfix"><br /></div>


<table class="table">
    <tr>
        <th><?php echo PROMOTION; ?></th><th><?php echo DELETE_PROMOTION; ?></th>
    </tr>
    <?php
    $promotion = $_GET['promotion'];
    $sql = mysqli_query($con, "SELECT * FROM promocii");

    while ($row = mysqli_fetch_array($sql)) {

        echo '<tr><td>' . $row['tekst'] . '</td><td>
<form action="process/deletepromotion.php" method="post">
<input type="hidden" value="' . $row['id'] . '" name="promotionid" />
    <button type="submit" class="btn btn-danger btn-xs">' . DELETE . '</button>
</form>

</td></tr>';
    }
    ?>

</table>
<? require_once 'footer.php'; ?>