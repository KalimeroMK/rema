<?php require_once 'header.php'; ?>
<div class="container">
    <div class="header">
        <div class="row">
            <div class="col-md-12"><p class="logo"><a href="/"><img src="images/logo.png" alt="Рема Компјутери" class="img-responsive img-rounded"/></a></p></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="navbox">
                <ul class="nava" style="overflow:auto; display: block;">
                    <li><a href="#">Почетна</a></li>
                    <li><a href="#">За нас</a></li>
                    <li><a href="#">Техничка подршка</a></li>
                    <li><a href="#">Брендови</a></li>
                    <li><a href="#">Контакт</a></li>
            </div>
        </div>
        <div class="col-md-10">
            <div class="clearfix"><br /></div>
            <div class="slider">
                <?php
                $sql = mysqli_query($con, "SELECT * FROM sliderimages ");

                echo '
  
              
                <div class="wrapper">
                    <div id="ei-slider" class="ei-slider">
                        <ul class="ei-slider-large">';



                while ($row = mysqli_fetch_array($sql)) {
                    echo '
                            <li>
                                <a href="/post.php?id=' . $row['img_id'] . '"><img class="img-responsive img-rounded" src="http://remaadmin.send.mk/' . $row['image'] . '" alt="' . $row['img_title'] . '" /></a>
                                <div class="ei-title">
                                    <h2>' . $row['img_title'] . '</h2>
                                    <h3>' . $row['img_text'] . '</h3>
                                </div>
                            </li>            
                            ';
                }

                echo '
                        </ul>
                        <ul class="ei-slider-thumbs">
                            <li class="ei-slider-element">Current</li>

                            ';
                $result = mysqli_query($con, "SELECT * FROM sliderimages");

                while ($row = mysqli_fetch_array($result)) {
                    echo '      <li><a href="/post.php?id=' . $row['img_id'] . '">' . $row['img_title'] . '</a><img src="http://remaadmin.send.mk/' . $row['image'] . '" alt="' . $row['img_title'] . '"  class="img-responsive img-rounded" /></li>
                            ';
                };


                echo '               
                        </ul>
                    </div>
                </div>';
                ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="brendovi">
                <?php
                $sql = mysqli_query($con, "SELECT * FROM brand");
                while ($row = mysqli_fetch_array($sql)) {


                    echo '
            

      <h2> <a href="categories.php?brandid=' . $row['id'] . '"> ' . $row['brand_name'] . ' </a> </h2>



            
';


                    $brandid = $row['id'];

                    $s = mysqli_query($con, "SELECT * FROM product
INNER JOIN categories ON product.cat_id = categories.category_id
INNER JOIN brand ON categories.brand_id = brand.id
WHERE categories.brand_id = '$brandid' LIMIT 3");


                    while ($r = mysqli_fetch_array($s)) {

                        echo '
                      
            
             <h3> <a href="categories.php?brandid=' . $r['brand_id'] . '">' . $r['cat_name'] . '</a> </h3>
                       <a href="product.php?product_id=' . $r['product_id'] . '"><img src="http://remaadmin.send.mk/' . $r['product_img'] . ' " width="50" alt="' . $r['product_name'] . '" /></a></li>

                                              
                 ';
                    }
                    echo '
  
            
                <a href="categories.php?brandid=' . $row['id'] . '">Прочитај повеќе...</a>


        
        ';
                }
                ?>
                <!-- Крај на брендови -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12"><p>Copyright &copy; Рема Компјутери, 2013</p></div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
