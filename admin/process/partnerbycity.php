<?php require_once '../config/conf.php'; ?>
<?php require_once '../header.php'; ?>

<p class="naslov" > <?php echo LIST_PARTNERS_BY_CITY; ?></p>

<table class="table">

    <?php echo '<th>' . NAME . '</th><th>' . PHONE . '</th><th>' . CITY . '</th><th>' . LINK . '</th>'; ?>
    <?php
    $city = $_POST['city'];


    $sql = mysqli_query($con, "SELECT * FROM partners INNER JOIN city ON partners.city = city.city_id");
    echo '
<div class="row">       
';
    while ($row = mysqli_fetch_array($sql)) {
        echo '                 
<tr>
<td>' . $row['name'] . '</td>
<td>' . $row['phone'] . '</td>
<td>' . $row['city_name'] . '</td>
<td>' . $row['link'] . '</td>
</tr>
</form>
';
    }
    ?>
</table>


<?php require_once 'footer.php'; ?>