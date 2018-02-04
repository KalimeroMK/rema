
<?php

$id = $_POST['editid'];
$baner1 = $_POST['slika_baner1'];
$baner2 = $_POST['slika_baner2'];

require_once 'config/conf.php';

if ($id == NULL) {
    echo "ERROR!";
} else {
        $updateuser = mysqli_query($con, "UPDATE brand SET baner1 = NULL WHERE id = '$id'");
        $updateuser = mysqli_query($con, "UPDATE brand SET baner2 = NULL WHERE id = '$id'");
    header('Location: /addbaner.php');

    mysqli_close($con);
}
?>
