<?php require_once '../config/conf.php'; ?>

<?php

$pageid = $_POST['pageid'];
$pagetitle = $_POST['pagetitle'];
$rte = $_POST['rte'];

if (isset($pagetitle) && $pagetitle != NULL) {
    $updateuser = mysqli_query($con, "UPDATE pages SET pagetitle = '$pagetitle' WHERE pageid = '$pageid'");
}
if (isset($rte) && $rte != NULL) {
    $updateuser = mysqli_query($con, "UPDATE pages SET pagerte = '$rte' WHERE pageid = '$pageid'");
}
header('Location: ../addpage.php');
mysqli_close($con);
?>
