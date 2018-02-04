
<?php

require_once '../config/conf.php';

$promotion = $_POST['promotion'];


  $sql = "INSERT INTO promocii (tekst) VALUES ('$promotion')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    
    header('Location: ../addpromotion.php');

?>