<?php require_once 'header.php'; ?>
<div class="container">
    <div class="row">
       <div class="col-md-2">
        <?php require_once 'levo.php'; ?>
    </div>
    <div class="col-md-10">
        <h3>Партнери</h3>
        <div class="form-group">
            <form action="" method="post" >
                <br />
                <?php
                $result = mysqli_query($con, "SELECT * FROM city");
                echo '<select name="city" id="choosecity" class="form-control"> ';
                while ($row = mysqli_fetch_array($result)) {
                echo '
                      <option value="' . $row['city_id'] . '">' . $row['city_name'] . '</option>
                      ';
                  }
                  echo ' </select> ';
            echo '  <br />
           <button type="submit" class="btn btn-default">Submit</button>
           </div>'
           ;
           ?>
       </form>   

       <table class="table">
        <?php
        $city = $_POST['city'];
        if (isset($city) && $city != NULL) {
            echo '<th>Име на компанија</th><th>Телефон</th><th>Град</th>';
            $sql = mysqli_query($con, "SELECT * FROM partners INNER JOIN city ON partners.city = city.city_id WHERE city.city_id = '$city'");
            while ($row = mysqli_fetch_array($sql)) {
                        echo '                 
<tr>
<td><a href="' . $row['link'] . '">' . $row['name'] . '</a></td>
<td>' . $row['phone'] . '</td>
<td>' . $row['city_name'] . '</td>
</tr>

';
}
}
?>
</table><!--table-->
</div><!--grup-->

</div><!--col-md-10-->

<?php require_once 'footer.php'; ?>
</div><!--row-->
</div><!--container-->