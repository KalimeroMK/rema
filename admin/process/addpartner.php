<?php require_once '../config/conf.php'; ?>

<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = ($_POST['city']);
$link = ($_POST['link']);

if ($name == NULL) {
    echo "Ве молам внесете име"; 
} else {

    $sql = "INSERT INTO partners (name, phone, city, link) VALUES ('$name', '$phone', '$city', '$link')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    header('Location: ../partners.php');

    mysqli_close($con);
}
?>
