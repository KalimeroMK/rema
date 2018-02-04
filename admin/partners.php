<? require_once 'header.php'; ?>

<?php
$deleteid = $_POST['deleteid'];
if (isset($deleteid) && $deleteid != NULL) {
    $sql = mysqli_query($con, "DELETE FROM partners WHERE id = '$deleteid'");
}
?>
<p class="naslov" > <?php echo LIST_PARTNERS; ?></p>

<table class="table">

    <?php echo '<th>' . NAME . '</th><th>' . PHONE . '</th><th>' . CITY . '</th><th>' . LINK . '</th><th>' . DELETE . '</th><th>' . EDIT_PARTNER . '</th>'; ?>
    <?php


// Check connection
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

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
    <td>
  <form action="" method="post">
                      <input type="hidden" name="deleteid" value="' . $row['id'] . '" />
                      <button type="submit" class="btn btn-danger btn-xs">' . DELETE . '</button>
                      </form>    

</td>
    <td>
  <form action="" method="post">
                      <input type="hidden" name="editid" value="' . $row['id'] . '" />
                      <button type="submit" class="btn btn-warning btn-xs">' . EDIT_PARTNER . '</button>
                      </form>    

</td>
</tr>
</form>
';
    }
    ?>
</table>




<hr />


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="addpartner" value="1" />
                <button type="subbmit" class="btn btn-info btn-xs"><?php echo ADD_PARTNER; ?></button>
            </form>
        </div>
    </div>
</div>




<?php
$id = $_POST['id'];
if (isset($_POST['addpartner']) && $_POST['addpartner'] != NULL) {
    echo ' <div class="row">
                    
        <div class="col-md-6">
                    <form action="/process/addpartner.php" method="post" role="form" class="form-horizontal">
                   
                     <div class="form-group">
                      <label for="inputname" class="col-sm-4 control-label">' . PARTNER_NAME . '</label>
                            <input type="text" name="name" id="inputname" class="col-sm-4 control-label"/>
                     </div>
                   
                     <div class="form-group">
                      <label for="inputphone" class="col-sm-4 control-label">' . PHONE . '</label>
                            <input type="text" name="phone" id="inputphone" class="col-sm-4 control-label"/>
                     </div>
                  <div class="form-group">
                     <label for="choosecity" class="col-sm-4 control-label">' . CHOOSE_CITY . '</label>      
';
    $result = mysqli_query($con, "SELECT * FROM city");
    echo '<select name="city" id="choosecity" class="form-control"> ';
    while ($row = mysqli_fetch_array($result)) {
        echo '
                      <option value="' . $row['city_id'] . '"  >' . $row['city_name'] . '</option>
                          ';
    }
    echo ' </select> </div>';
    echo '<div class="form-group">
                     
                      <label for="inputlink" class="col-sm-4 control-label">' . LINK . '</label>
                       <input type="text" name="link" id="inputlink" class="col-sm-4 control-label"/>
                     </div>      
      

                   <button type="submit" class="btn btn-default">' . SUBMIT_PARTNER_FORM . '</button>
</form>
                   </div>
                   </div>'
    ;
}

$editid = $_POST['editid'];
if (isset($editid) && $editid != NULL) {
    $sql = mysqli_query($con, "SELECT * FROM partners WHERE id = '$editid'");

    while ($row = mysqli_fetch_array($sql)) {

        echo ' <div class="row">
                    
        <div class="col-md-6">
                    <form action="/process/editpartner.php" method="post" role="form" class="form-horizontal">
                   
                     <div class="form-group">
                      <label for="inputname" class="col-sm-4 control-label">' . PARTNER_NAME . '</label>
                            <input type="text" name="name" id="inputname" class="col-sm-4 control-label" value="' . $row['name'] . '"/>
                     </div>
                   
                     <div class="form-group">
                      <label for="inputphone" class="col-sm-4 control-label">' . PHONE . '</label>
                            <input type="text" name="phone" id="inputphone" class="col-sm-4 control-label" value="' . $row['phone'] . '"/>
                     </div>
                  <div class="form-group">
                     <label for="choosecity" class="col-sm-4 control-label">' . CHOOSE_CITY . '</label>      
';
        $result = mysqli_query($con, "SELECT * FROM city");



        echo '<select name="city" id="choosecity" class="form-control"> ';
        while ($a = mysqli_fetch_array($result)) {

            if ($a['city_id'] === $row['city']) {
                $selected = "selected";
            } else {
                $selected = "";
            }



            echo '
                      <option value="' . $a['city_id'] . '"  ' . $selected . '>' . $a['city_name'] . '</option>
                          ';
        }
        echo ' </select> </div>';
        echo '<div class="form-group">
        

                     
                      <label for="inputlink" class="col-sm-4 control-label">' . LINK . '</label>
                       <input type="text" name="link" id="inputlink" class="col-sm-4 control-label" value="' . $row['link'] . '"/>       
                           
                    <input type="hidden" name="user_id" value="' . $row['id'] . '"/>   
                        </div>      
      

                   <button type="submit" class="btn btn-default">' . SUBMIT_PARTNER_FORM . '</button>
</form>
                   </div>
                   </div>'
        ;
    }
}
?>
</div>





<? require_once 'footer.php'; ?>
