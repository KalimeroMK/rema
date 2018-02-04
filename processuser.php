<?php require_once 'header.php'; ?>
<?php require_once 'levo.php'; ?>
<?php

require_once 'config/conf.php';

$firma = $_POST['firma'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$user_pass = $_POST['password'];

 $sql = "INSERT INTO registracii (firma, telefon, email, password) VALUES ('$firma', '$telefon', '$email', '$user_pass')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    else {
       echo ' Вашата регистрација е успешна. '; 
    }
?>

<div class="col-md-4 pull-right">
    <h3> Контакт </h3>

    <h4>Рема компјутери</h4>
    <address>
        ул. Владимир Каваев 2б <br />
        1000 Скопје - Македонија
    </address>
    <div class="clear"></div>
    <address>
        TEL   	+389 2 55 11 305 <br />
        TEL   	+389 2 55 11 306  <br />
        FAX   	+389 2 3 118 159 Локал 110 
    </address>
    <div class="clear"></div><br />
    <address>
        EMAIL  <a href="mailto:rema@rema.com.mk">rema@rema.com.mk</a> <br />
    </address>  
</div>
<?php require_once 'footer.php'; ?>

