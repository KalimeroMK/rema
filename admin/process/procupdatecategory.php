
<?php

$id = $_POST['id'];
$cat_name = $_POST['cat_name'];
$cat_img = $_POST['slika'];
$brand_name = $_POST['brand'];


require_once '../config/conf.php';

if ($cat_name == NULL) {
    echo "Ве молам внесете име "; 
} else {

      if (isset($cat_name) && $cat_name != NULL) {
     $updateuser = mysqli_query($con, "UPDATE categories SET cat_name = '$cat_name' WHERE category_id = '$id'");
    }
    if (isset($cat_img) && $cat_img != NULL) {
    $updateuser = mysqli_query($con, "UPDATE categories SET cat_img = '$cat_img' WHERE category_id = '$id'");
    }
       if (isset($brand_name) && $brand_name != NULL) {
         
     $updateuser = mysqli_query($con, "UPDATE categories  SET brand_id = '$brand_name' WHERE category_id = '$id'");
    }
    
    header('Location: ../addcategory.php'); 

    mysqli_close($con);
}
?>
