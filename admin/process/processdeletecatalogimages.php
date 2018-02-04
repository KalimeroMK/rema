<?php require_once '../config/conf.php'; ?>
<?php
$id = $_POST['id'];



// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$delete = "DELETE FROM catalogimages WHERE id = '$id'";
$execute = mysqli_query($con, $delete);

header('Location: ../addcatalogimage.php');
?>

