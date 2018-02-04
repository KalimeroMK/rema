
<?php require_once 'header.php'; ?>

<p class="breadcrumb" style="text-align: center;"> <?php echo UPDATE; ?> </p>
<form id="vpb_file_attachment_form" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>

<?php
$editid = $_POST['editid'];

  echo ' <form action="process/procupdatebrand.php" method="post">';

    $sql = mysqli_query($con, "SELECT * FROM brand WHERE id = '$editid'");

    while ($row = mysqli_fetch_array($sql)) {

        echo ' 
    <br />
    <div id="vpb_upload_status"></div>
    <br />
  <div class="form-group">
        <label for="inputNaslov">'. BRAND_NAME.'</label>
        
        <input type="text" class="form-control" id="inputNaslov" value="' . $row['brand_name'] . '" name="brand_name">
    </div>
    <br />
    <input type="hidden"  name="id" value="'.$row['id'].'" />
    <button type="submit" class="btn btn-success">'.SUBMIT.'</button>
';
}


echo '</form>';

 require_once 'footer.php'; ?>