<? require_once 'header.php'; ?>
<p class="breadcrumb" style="text-align: center;" ><?php echo ADD_SUB_CATEGORY; ?> </p>


<form action="addsubcat.php" method="post" >


    <div class="form-group">
        <label for="inputBrand"><?php echo BRAND_NAME; ?></label>
        <?php
        $result = mysqli_query($con, "SELECT * FROM brand");
        echo '   <select name="brand" id="inputBrand" class="form-control"> ';
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



<? require_once 'footer.php'; ?>