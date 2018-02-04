<?php require_once 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <?php require_once 'levo.php'; ?>
        </div>
        <div class="col-md-8">
            <div class="brendovi">
                <?php
                $brand_id = $_GET['brandid'];
                $sql_check = mysqli_query($con, "SELECT * FROM categories WHERE parentid = 'NULL' AND brand_id = $brand_id ORDER BY orderid ASC");
                while ($r = mysqli_fetch_assoc($sql_check)) {
                    echo '        
                    <div class="brandbox-cat">
                    ';
                        echo '
                        <a href="subcat?catid=' . $r['category_id'] . '"  rel=""  title="' . $r['brand_name'] . '">
                            <img src="admin/' . $r['cat_img'] . '" alt="' . $r['cat_name'] . '" />
                        </a>
                        <h6>' . $r['cat_name'] . '</h6>
                    </div>
                    ';
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
                echo '<img src="admin/' . $r['brand_img'] . '" class="img-responsive" />';
                $baner1 = $r['baner1'];
                $baner2 = $r['baner2'];
                if (($baner1 != NULL)) {
                    echo '<div class="banner">          
                    <img src="admin/' . $r['baner1'] . '" alt="' . $r['brand_name'] . '" class="img-responsive" />
                </div>
                <br /><br />
                ';
            }
            if (($baner2 != NULL)) {
                echo '<div class="banner">  
                <img src="admin/' . $r['baner2'] . '" alt="' . $r['brand_name'] . '" class="img-responsive" />
                </div>';
            }
        }
        ?>
    </div>
    <?php require_once 'footer.php'; ?>
</div>
</div>