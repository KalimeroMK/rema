<?php require_once '../config/conf.php'; ?>

<?php
$subcatname = $_POST['subcatname'];
$cat_img = $_POST['slika'];
$brand = $_POST['brand'];
$category = $_POST['category'];
$pid = $_POST['pid'];

if ($subcatname == NULL) {
    echo "error";
} else {

    $sql = "INSERT INTO subcat (subcat_name, subcat_image, brand_id, maincategory_id, pid) VALUES ('$subcatname', '$cat_img', '$brand', '$category','$pid')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    
    
    
        $c = "INSERT INTO categories (parentid, cat_name, cat_img, brand_id) VALUES ('$pid', '$subcatname', '$cat_img', '$brand')";
    if (!mysqli_query($con, $c)) {
        die('Error: ' . mysqli_error($con));
    }
    
    

    header('Location: ../addsubcategory.php');

}
?>
</body>
</html>