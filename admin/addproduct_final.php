<? require_once 'header.php'; ?>

<form id="vpb_file_attachment_form" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo BROWSE; ?></label><input type="file" name="browsed_file" id="browsed_file" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>

<form action="process/processproduct.php" method="post" >
    <br />
    <div id="vpb_upload_status"></div>
    <br />

    <div class="form-group">
        <label for="inputNaslov"><?php echo PRODUCT_NAME; ?> </label>
        <input type="text" class="form-control" id="inputNaslov" placeholder="<?php echo ENTER_TITLE; ?>" name="name">
    </div>
    <br />
    <div class="form-group">
        <label for="inputCategory"><?php echo BRAND_NAME ?> </label>
        <?php
        $brandid = $_GET['brandid'];
        $result = mysqli_query($con, "SELECT * FROM brand WHERE id='$brandid'");
        echo '   <select name="brand" id="inputCategory" class="form-control" disabled> ';
        while ($row = mysqli_fetch_array($result)) {
            echo '
    <option value="' . $row['id'] . '">' . $row['brand_name'] . '</option>
';
        }
        echo ' </select> ';
        ;
        ?>
    </div>
    
    <div class="form-group">
        <label for="inputCategory"><?php echo CAT_NAME; ?> </label>
        <?php
        $brandid = $_GET['brandid'];
        $category = $_GET['category'];
        $result = mysqli_query($con, "SELECT * FROM categories WHERE category_id='$category'");
        echo '   <select id="inputCategory" class="form-control" disabled> ';
        while ($row = mysqli_fetch_array($result)) {
            echo '
    <option value="' . $row['category_id'] . '">' . $row['cat_name'] . '</option>
';
        }
        echo ' </select> 
           

';
        ;
        ?>
    </div>
    
    
    


        <?php
        $brandid = $_GET['brandid'];
        $category = $_GET['category'];
        $result = mysqli_query($con, "SELECT * FROM subcat INNER JOIN categories ON subcat.pid = categories.parentid WHERE subcat.maincategory_id = $category AND categories.brand_id = $brandid");

       $proverka = mysqli_num_rows($result);


        if ($proverka != 0) {
       echo '         <div class="form-group">
        <label for="inputCategory">'.SUB_CAT_NAME.'</label>';
        


          echo '   <select name="subcat" id="inputCategory" class="form-control"> ';
          while ($row = mysqli_fetch_array($result)) {
 
          if(isset($row['subcat_id'])) {
          echo '<option value="' . $row['category_id'] . '"> ' . $row['subcat_name'] . '</option>';
          }
          }
          echo ' </select> </div> ';
          ;
    }
        ?>
   
    <div class="form-group">
        <textarea name="rte" class="ckeditor"></textarea>
    </div>
    <div class="form-group">
        <label for="inputLink"><?php echo ENTER_LINK; ?> </label>
        <input type="text" class="form-control" id="inputLink" placeholder="<?php echo ENTER_LINK_PATH; ?>" name="link">
    </div>
    
 <?php echo '   <input type="hidden" value="'.$_GET['category'].'"  name="category" /> '; ?>

    <button type="submit" class="btn btn-default">Submit</button>
</form>  


<? require_once 'footer.php'; ?>