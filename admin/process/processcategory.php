<?php require_once '../config/conf.php'; ?>

<?php
$cat_name = $_POST['name'];
$cat_img = $_POST['slika'];
$brand = $_POST['brand'];

if ($cat_name == NULL) {
    echo "error";
} else {

    $sql = "INSERT INTO categories (cat_name, cat_img, brand_id) VALUES ('$cat_name', '$cat_img', '$brand')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    header('Location: ../admin.php');

    mysqli_close($con);
}
?>
</body>
</html>