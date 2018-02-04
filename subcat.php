<?php require_once 'header.php'; ?>
<div class="container">
<div class="row">
    <div class="col-md-2">
        <p class="logo"><a href="/"><img src="images/logo.png" alt="Рема Компјутери" class="img-responsive img-rounded"/></a></p>
        <div class="navbox">
            <ul class="nava" style="overflow:auto; display: block;">
                <li><a href="/">Почетна</a></li>
                <li><a href="brendovi.php">Брендови</a></li>
                <?php
                $sql = mysqli_query($con, "SELECT * FROM pages
                    ");
                while ($row = mysqli_fetch_array($sql)) {
                    echo '<li> <a href="pages.php?page=' . $row['pageid'] . '" class="menulink">' . $row['pagetitle'] . '</a></li>';
                }
                ?>
                <li><a href="kontakt.php">Контакт</a></li>
            </div>
            <br />
        </div>
        <div class="col-md-8">
            <div class="brendovi">
                <?php
                $category_id = $_GET['catid'];
                $sql_check = mysqli_query($con, "SELECT * FROM subcat INNER JOIN categories ON subcat.pid = categories.parentid WHERE maincategory_id = $category_id");
                $proverka = mysqli_num_rows($sql_check);
                if ($proverka != 0) {
                    while ($r = mysqli_fetch_assoc($sql_check)) {
                        echo '        
                        <div class="brandbox-cat">
                           <a href="products.php?catid=' . $r['category_id'] . '" rel=""  title="' . $r['brand_name'] . '">
                            <img src="admin/' . $r['cat_img'] . '" alt="' . $r['subcat_name'] . '" class="img-responsive"/>
                        </a>
                        <h6>' . $r['subcat_name'] . '</h6>
                    </div>
                    ';
                }  
            }
            else {
                header('Location: products.php?catid=' . $category_id . '');
            }
            ?>
        </div>
    </div>
    <div class="col-md-2"> 
        <?php require_once 'search.php'; ?>
        <?php
        $brand_id = $_GET['brandid'];
        $sql_check = mysqli_query($con, "SELECT * FROM brand WHERE id = $brand_id");
        while ($r = mysqli_fetch_assoc($sql_check)) {
            echo '<img src="http://remaadmin.send.mk/' . $r['brand_img'] . '" class="img-responsive" />';
            $baner1 = $r['baner1'];
            $baner2 = $r['baner2'];
            if (($baner1 != NULL)) {
                echo '<div class="banner">          
                <img src="http://remaadmin.send.mk/' . $r['baner1'] . '" alt="' . $r['brand_name'] . '" class="img-responsive" />
            </div>
            <br /><br />
            ';
        }
        if (($baner2 != NULL)) {
            echo '<div class="banner">  
            <img src="http://remaadmin.send.mk/' . $r['baner2'] . '" alt="' . $r['brand_name'] . '" class="img-responsive" />
        </div>';
    }
}
?>
</div>
<?php require_once 'footer.php'; ?>
</div>
</div>