<?php require_once '../config/conf.php'; ?>
<?php
$product_id = $_POST['product_id'];


// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$delete = "DELETE FROM product WHERE product_id = '$product_id'";
$execute = mysqli_query($con, $delete);

header('Location: ../choosebrand.php');
?>

