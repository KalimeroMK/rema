<?php require_once 'header.php'; ?>
<div class="container">
<div class="row">
<div class="col-md-2">
<?php require_once 'levo.php'; ?>
</div>
<div class="col-md-8">
    <h3>

        <?php
        $cat_id = $_GET['catid'];
        $sql = mysqli_query($con, "SELECT * FROM product INNER JOIN categories ON product.cat_id = categories.category_id WHERE category_id = $cat_id LIMIT 1");

        while ($row = mysqli_fetch_array($sql)) {
            echo $row['cat_name'];
        }
        ?>

    </h3>
    <div class="brendovi">

        <?php
        $cat_id = $_GET['catid'];
        $sql = mysqli_query($con, "SELECT * FROM product INNER JOIN categories ON product.cat_id = categories.category_id WHERE category_id = $cat_id");

        while ($row = mysqli_fetch_array($sql)) {
            echo '        
                <div class="brandbox-cat">
          
                <a href="product.php?product_id=' . $row['product_id'] . '" rel=""  title="' . $row['product_name'] . '">
                    <img src="admin/' . $row['product_img'] . '" alt="' . $row['product_name'] . '" class="img-responsive" />
                </a>
                <h6>' . $row['product_name'] . '</h6>
            </div>
      
';
        }
        ?>
    </div>
</div>
<div class="col-md-2">
    <?php require_once 'search.php'; ?>
</div>
<?php require_once 'footer.php'; ?>
</div>
</div>