

<?php require_once '../config/conf.php'; ?>

<?php
$brand_name = $_POST['name'];
$brand_img = $_POST['slika'];

if ($brand_name == NULL) {
    header('Location: ../index.php');
} else {

    $sql = "INSERT INTO brand (brand_name, brand_img) VALUES ('$brand_name', '$brand_img')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    header('Location: ../index.php');

    mysqli_close($con);
}
?>
</body>
</html>