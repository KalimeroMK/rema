
<?php require_once 'header.php'; ?>

<p class="breadcrumb" style="text-align: center;"> <?php echo UPDATE; ?> </p>
<form id="vpb_file_attachment_form" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>

<?php
$editid = $_POST['editid'];
  echo ' <form action="process/procupdateproduct.php" method="post">';

    $sql = mysqli_query($con, "SELECT * FROM product INNER JOIN categories ON product.cat_id = categories.category_id INNER JOIN brand ON categories.brand_id = brand.id WHERE product_id = '$editid' ");

    while ($row = mysqli_fetch_array($sql)) {
        echo ' 
    <br />
    <div id="vpb_upload_status"></div>
    <br />    
  <div class="form-group">
        <label for="inputNaslov">'. PRODUCT_NAME.'</label>
        <input type="text" class="form-control" id="inputNaslov" value="' . $row['product_name'] . '" name="product_name">
    </div>
     <div class="form-group">
      <label for="inputDescription">'. DESCRIPTION.'</label>
        <textarea name="rte" class="ckeditor">' . $row['description'] . '</textarea>
       
      
    </div>
     <div class="form-group">
        <label for="inputLink">'. LINK.'</label>
        <input type="text" class="form-control" id="inputLink" value="' . $row['link'] . '" name="link">
    </div>';
 
echo '    <br />
    <input type="hidden"  name="id" value="'.$row['product_id'].'" />
    <button type="submit" class="btn btn-danger">'.UPDATE.'</button>
';

}

echo '</form>';

 require_once 'footer.php'; ?>