<?php require_once '../config/conf.php'; ?>

<?php
$id = $_POST['editid'];
$baner1 = $_POST['slika_baner1'];
$baner2 = $_POST['slika_baner2'];

if ($id == NULL) {
    echo "ERROR. "; 
} else {

    if (isset($baner1) && $baner1 != NULL) {
    $updateuser = mysqli_query($con, "UPDATE brand SET baner1 = '$baner1' WHERE id = '$id'");
    }
      if (isset($baner2) && $baner2 != NULL) {
    $updateuser = mysqli_query($con, "UPDATE brand SET baner2 = '$baner2' WHERE id = '$id'");
    }
    
    
 header('Location:../addbaner.php'); 
    mysqli_close($con);
}

?>