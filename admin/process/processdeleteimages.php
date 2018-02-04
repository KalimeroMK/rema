<?php require_once '../config/conf.php'; ?>
<?php
$img_id = $_POST['img_id'];



// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$delete = "DELETE FROM sliderimages WHERE img_id = '$img_id'";
$execute = mysqli_query($con, $delete);

header('Location: ../addsliderimage.php');
?>

