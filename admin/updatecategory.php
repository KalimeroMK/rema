
<?php require_once 'header.php'; ?>

<p class="breadcrumb" style="text-align: center;"> <?php echo UPDATE; ?> </p>
<form id="vpb_file_attachment_form" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>

<?php
$editid = $_POST['editid'];
  echo ' <form action="process/procupdatecategory.php" method="post">';

    $sql = mysqli_query($con, "SELECT * FROM categories INNER JOIN brand WHERE category_id = '$editid' AND categories.brand_id = brand.id  ");

    while ($row = mysqli_fetch_array($sql)) {

        echo ' 
    <br />
    <div id="vpb_upload_status"></div>
    <br />
  <div class="form-group">
        <label for="inputNaslov">'. CAT_NAME.'</label>
        <input type="text" class="form-control" id="inputNaslov" value="' . $row['cat_name'] . '" name="cat_name">
    </div>
     <div class="form-group">
        <label for="inputBrand">'. BRAND_NAME.'</label>';
            $result = mysqli_query($con, "SELECT * FROM brand");          
            echo '
             <select name="brand" id="inputBrand" class="form-control"> ';
         while ($row1 = mysqli_fetch_array($result)) {
             echo '    <option value="' . $row1['id'] . '">' . $row1['brand_name'] . '</option>';
        
 }
    echo ' </select> ';
      
    
echo '    <br />
    <input type="hidden"  name="id" value="'.$row['category_id'].'" />
    <button type="submit" class="btn btn-warning">'.UPDATE.'</button>
';

}

echo '</form>';

 require_once 'footer.php'; ?>