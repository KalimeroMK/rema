<?php require_once '../../config/conf.php'; ?>

<?php
$city_name = $_POST['city_name'];

if ($city_name == NULL) {
    header('Location: /city.php');
} else {

    $sql = "INSERT INTO city (city_name) VALUES ('$city_name')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    header('Location: /city.php');

    mysqli_close($con);
}
?>