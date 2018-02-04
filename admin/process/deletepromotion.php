<?php
require_once '../config/conf.php';
$id = $_POST['promotionid'];

$delete = "DELETE FROM promocii WHERE id = '$id'";
$execute = mysqli_query($con, $delete);
header('Location: ../addpromotion.php');
?>

