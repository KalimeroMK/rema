<? require_once 'header.php'; ?>
<p class="breadcrumb" style="text-align: center;" ><?php echo ADD_CATEGORY; ?> / <a href="addsubcategory.php" class="btn btn-info"><?php echo ADD_SUBCATEGORY; ?></a></p>

<form id="vpb_file_attachment_form" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="on">
    <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file" class="btn btn-warning">
    <a href="javascript:void(0);" onclick="vpb_upload_and_resize();" class="btn btn-info" required><?php echo UPLOAD; ?></a> 
</form>

<form action="process/processcategory.php" method="post" >
    <br />
    <div id="vpb_upload_status"></div>
    <br />

    <div class="form-group">
        <label for="inputNaslov"><?php echo CAT_NAME; ?> </label>
        <input type="text" class="form-control" id="inputNaslov" placeholder="<?php echo ENTER_TITLE; ?>" name="name">
    </div>
    <br />
    <div class="form-group">
        <label for="inputCategory"><?php echo BRAND_NAME; ?></label>
        <?php
        $result = mysqli_query($con, "SELECT * FROM brand");
        echo '   <select name="brand" id="inputCategory" class="form-control"> ';
        while ($row = mysqli_fetch_array($result)) {
            echo '
    <option value="' . $row['id'] . '">' . $row['brand_name'] . '</option>
';
        }
        echo ' </select> ';
        ;
        ?>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>    
<br />
<br />


<p class="breadcrumb" style="text-align: center;" ><?php echo IZBRISHI_KATEGORIJA; ?> </p>

<table class="table">

    <?php echo '<th>' . CAT_NAME . '</th><th>' . CAT_IMG . '</th><th>' . BRAND_ID . '</th><th>' . DELETE . '</th><th>' . UPDATE . '</th>'; ?>
    <?php


// Check connection
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $sql = mysqli_query($con, "SELECT * FROM categories INNER JOIN brand ON categories.brand_id = brand.id");
    echo '
<div class="row">       
';
    while ($row = mysqli_fetch_array($sql)) {
        echo '
            
<tr>
<td>' . $row['cat_name'] . '</td>
<td><img src="' . $row['cat_img'] . '" class="img-responsive" ></img></td>
<td>' . $row['brand_name'] . '</td>
<td>
<form action="process/processdeletecategory.php" method="post">     
<input type="hidden"  name="cat_id" value="' . $row['category_id'] . '" />
<button type="submit" class="btn btn-danger btn-xs" >' . IZBRISHI_KATEGORIJA . '</button>
</form>
</td>
<td>
<form action="updatecategory.php" method="post">     
<input type="hidden"  name="editid" value="' . $row['category_id'] . '" />
<button type="submit" class="btn btn-warning btn-xs" >' . UPDATE . '</button>
</form>
</td>
</tr>

';
    }
    ?>
</table>

<? require_once 'footer.php'; ?>