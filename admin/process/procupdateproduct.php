
<?php

require_once '../config/conf.php';

$id = $_POST['id'];
$product_img = $_POST['slika'];
$description = $_POST['rte'];
$link = $_POST['link'];
$cat_id = $_POST['category'];
$product_name = $_POST['product_name'];

if ($product_name == NULL) {
    echo "Ве молам внесете име "; 
} else {

      if (isset($product_name) && $product_name != NULL) {
     $updateuser = mysqli_query($con, "UPDATE product SET product_name = '$product_name' WHERE product_id = '$id'");
    } 
    
   
    if (isset($product_img) && $product_img != NULL) {
    $updateuser = mysqli_query($con, "UPDATE product SET product_img = '$product_img' WHERE product_id = '$id'");
    }
    if (isset($description) && $description != NULL) {   
     $updateuser = mysqli_query($con, "UPDATE product SET description = '$description' WHERE product_id = '$id'");
    }
    if (isset($link) && $link != NULL) {   
     $updateuser = mysqli_query($con, "UPDATE product SET link = '$link' WHERE product_id = '$id'");
    }

   header('Location: ../choosebrand.php'); 

    
    mysqli_close($con);
}
?>
