
<?php

$id = $_POST['id'];
$brand_name = $_POST['brand_name'];
$brand_img = $_POST['slika'];

require_once '../config/conf.php';

if ($brand_name == NULL) {
    echo "Ве молам внесете име"; 
} else {

      if (isset($brand_name) && $brand_name != NULL) {
    $updateuser = mysqli_query($con, "UPDATE brand SET brand_name = '$brand_name' WHERE id = '$id'");
    }
    if (isset($brand_img) && $brand_img != NULL) {
    $updateuser = mysqli_query($con, "UPDATE brand SET brand_img = '$brand_img' WHERE id = '$id'");
    }
    
    
    
 header('Location: ../addbrand.php'); 

    mysqli_close($con);
}
?>
