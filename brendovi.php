<?php require_once 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-md-2">
      <?php require_once 'levo.php'; ?>
    </div>
    <div class="col-md-8">
            <div class="brendovi">
        <div class="clearfix"><br /></div>
        <div class="clearfix"><br /></div>
        <?php
        $sql = mysqli_query($con, "SELECT * FROM brand");
        while ($row = mysqli_fetch_array($sql)) {
          echo '    <div class="brandbox2"><a href="categories?brandid=' . $row['id'] . '"><img src="admin/' . $row['brand_img'] . '" alt="' . $row['brand_name'] . '" /></a></div>
          ';
        };
        ?>
      </div>
    </div>
    <div class="col-md-2">
      <?php require_once 'desno.php'; ?>
    </div>
    <?php require_once 'footer.php'; ?>
  </div>
</div>
