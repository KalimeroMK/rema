<?php require_once 'header.php'; ?>
<div class="container">
<div class="row">
<div class="col-md-2">
<?php require_once 'levo.php'; ?>
</div>
<div class="col-md-8">
    <h3>
        <?php
        $product_id = $_GET['product_id'];
        $sql = mysqli_query($con, "SELECT * FROM product INNER JOIN categories ON product.cat_id = categories.category_id WHERE product_id = $product_id");
        while ($row = mysqli_fetch_array($sql)) {
            echo $row['product_name'];
        }
        ?>
    </h3>
    <div class="brendovi">
        <?php
        $product_id = $_GET['product_id'];
        $sql = mysqli_query($con, "SELECT * FROM product INNER JOIN categories ON product.cat_id = categories.category_id WHERE product_id = $product_id");
        while ($row = mysqli_fetch_array($sql)) {
            echo '       
            <div class="row">
                <div class="product">
                    <img src="admin/' . $row['product_img'] . '" alt="' . $row['product_name'] . '"  />
                    <div class="description"><p>' . $row['description'] . '</p><p><a href="' . $row['link'] . '" target="_blank">Линк</a></p></div>
                </div>
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