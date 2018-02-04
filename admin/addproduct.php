<? require_once 'header.php'; ?>


<form action="addproduct_sub.php" method="post" >
  
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
        <label for="inputCategory"><?php echo CAT_NAME ?></label>
        <?php
        $brandid = $_GET['brandid'];
        $result = mysqli_query($con, "SELECT * FROM categories WHERE brand_id = $brandid AND parentid = 'NULL'");




          echo '   <select name="category" id="inputCategory" class="form-control"> ';
          while ($row = mysqli_fetch_array($result)) {
          echo '
             
          <option value="' . $row['category_id'] . '">' . $row['cat_name'] . '</option>




          ';
          if(isset($row['subcat_id'])) {
          echo '<option value="' . $row['subcat_id'] . '">--- ' . $row['subcat_name'] . '</option>';
          }
          }
          echo ' </select> ';
          ;
   echo '  <input type="hidden" name="brandid" value="'.$brandid.'">';
        ?>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
</form>  


<? require_once 'footer.php'; ?>