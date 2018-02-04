<?php require_once 'header.php'; ?>
<?php

session_start();
if (isset($_SESSION['user_email'])) {



    echo '


    <div class="row">
        <div class="col-md-4"><a href="addcategory.php"><img src="images/admin/category.png" alt="Category" />' . ADD_CATEGORY . '</a></div>
        <div class="col-md-4"><a href="choosebrand.php"><img src="images/admin/product.png" alt="Product" />' . ADD_PRODUCT . '</a></div>
        <div class="col-md-4"><a href="addbrand.php"><img src="images/admin/brand.png" alt="Brand" />' . ADD_BRAND . '</a></div>
    </div>
    <div class="row">
        <div class="col-md-4"><a href="addsliderimage.php"><img src="images/admin/slider.png" alt="Slider" />' . ADD_SLIDER . '</a></div>
        <div class="col-md-4"><a href="users.php"><img src="images/admin/users.png" alt="Slider" />' . USER . '</a></div>
        <div class="col-md-4"><a href="addfile.php"><img src="images/admin/add-icon.png" alt="Slider" />' . ADD_FILE . '</a></div>
    </div>
    <div class="row">
        <div class="col-md-4"><a href="addpage.php"><img src="images/admin/page.png" alt="Pages" />' . ADD_PAGE . '</a></div>
        <div class="col-md-4"><a href="addpromotion.php"><img src="images/admin/promotion.png" alt="Promotions" />' . ADD_PROMOTION . '</a></div>
        <div class="col-md-4"><a href="partners.php"><img src="images/admin/partners.png" alt="Partners" />' . ADD_PARTNERS . '</a></div>
    </div>   
    <div class="row">
         <div class="col-md-4"><a href="addcatalogimage.php"><img src="images/admin/catalogicon.png" alt="Catalog" />' . ADD_CATALOG . '</a></div>
         <div class="col-md-4"><a href="addbaner.php"><img src="images/admin/banner.png" alt="Catalog" />' . ADD_BANER . '</a></div>
     </div>  


';
} else {
    echo 'Please <a href="index.php">Log in</a>';
}
?>

<?php require_once 'footer.php'; ?>



