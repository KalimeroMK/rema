<?php require_once 'header.php'; ?>
<div class="container">
<div class="row">
<div class="col-md-2">
<?php require_once 'levo.php'; ?>
</div>
<div class="col-md-10">
    <div class="brendovi">
        <h3>
            <?php
            $pageid = $_GET['page'];
            $sql = mysqli_query($con, "SELECT * FROM pages WHERE pageid = '$pageid'");
            while ($row = mysqli_fetch_array($sql)) {
                echo $row['pagetitle'];
            }
            ?>
        </h3>
        <div class="pagerte">
            <?php
            $pageid = $_GET['page'];
            $sql = mysqli_query($con, "SELECT * FROM pages WHERE pageid = '$pageid'");
            while ($row = mysqli_fetch_array($sql)) {
                echo $row['pagerte'];
            }
            ?>
        </div>
        <div class="clearfix"><br /></div>
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix"><br /></div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
</div>
</div>