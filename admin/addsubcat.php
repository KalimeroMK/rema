
<? require_once 'header.php'; ?>
<p class="breadcrumb" style="text-align: center;" ><?php echo ADD_SUB_CATEGORY; ?> </p>
<form id="vpb_file_attachment_form" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>

<form action="process/processsubcategory.php" method="post" >


    <div class="form-group">
        <label for="inputCategory"><?php echo CATEGORY_NAME; ?></label>
        <?php
        $brandid = $_POST['brand'];
        $result = mysqli_query($con, "SELECT * FROM categories WHERE brand_id = $brandid AND parentid = 'NULL'");
        echo '   <select name="category" id="inputCategory" class="form-control"> ';
        while ($row = mysqli_fetch_array($result)) {
            echo '
    <option value="' . $row['category_id'] . '">' . $row['cat_name'] . '</option>
';
        }
        echo ' </select> 
            <input type="hidden" name="brand" value="'.$brandid.'" />
                <input type="hidden" name="pid" value="'. rand(3, 300) .'" />
';
        ;
        ?>
    </div>








    <br />
    <div id="vpb_upload_status"></div>
    <br />

    <div class="form-group">
        <label for="inputNaslov"><?php echo SUB_CAT_NAME; ?> </label>
        <input type="text" class="form-control" id="inputNaslov" placeholder="<?php echo ENTER_TITLE; ?>" name="subcatname">
    </div>
    <br />

    <button type="submit" class="btn btn-default">Submit</button>
</form>    
<br />
<br />



<? require_once 'footer.php'; ?>

