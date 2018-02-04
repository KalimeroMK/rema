<?php require_once '../config/conf.php'; ?>

<?php

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = ($_POST['city']);
$link = ($_POST['link']);






if ($name == NULL) {
    echo "Ве молам внесете име"; 
} else {

      if (isset($name) && $name != NULL) {
    $updateuser = mysqli_query($con, "UPDATE partners SET name = '$name' WHERE id = '$user_id'");
    }
    if (isset($phone) && $phone != NULL) {
    $updateuser = mysqli_query($con, "UPDATE partners SET phone = '$phone' WHERE id = '$user_id'");
    }
    if (isset($city) && $city != NULL) {
    $updateuser = mysqli_query($con, "UPDATE partners SET city = '$city' WHERE id = '$user_id'");
    }
    if (isset($link) && $link != NULL) {
    $updateuser = mysqli_query($con, "UPDATE partners SET link = '$link' WHERE id = '$user_id'");
    }
    
    
    
    header('Location: ../partners.php');

    mysqli_close($con);
}
?>
