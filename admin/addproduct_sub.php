<?php require_once 'header.php'; ?>


<?php
        $category = $_POST['category'];

        $brandid = $_POST['brandid'];
        $sql_check = mysqli_query($con, "SELECT * FROM subcat INNER JOIN categories ON subcat.pid = categories.parentid WHERE maincategory_id = $category_id");

        $proverka = mysqli_num_rows($sql_check);


        if ($proverka != 0) {
            
        } else {
            header('Location: addproduct_final.php?category=' . $category . '&brandid='.$brandid.'');
        }

       
        ?>


<?php require_once 'footer.php'; ?>
