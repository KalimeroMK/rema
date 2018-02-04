

<?php require_once 'config/conf.php'; ?>

<?php
$id = $_POST['editid'];
$idb = $_POST['brand'];
$baner1 = $_POST['slika_baner1'];
$baner2 = $_POST['slika_baner2'];

if ($id == NULL) {
    echo "ERROR. "; 
} else {

    if (isset($baner1) && $baner1 != NULL) {
    $updateuser = mysqli_query($con, "UPDATE brand SET baner1 = '$baner1' WHERE id = '$idb'");
    }
      if (isset($baner2) && $baner2 != NULL) {
    $updateuser = mysqli_query($con, "UPDATE brand SET baner2 = '$baner2' WHERE id = '$idb'");
    }
    
  header('Location: /addbaner.php'); 

    mysqli_close($con);
}

?>