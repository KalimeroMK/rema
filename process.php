<?php require_once 'header.php'; ?>
<?php
$firma = $_POST['firma'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$poraka = $_POST['poraka'];
$do = $_POST['do'];

$poraka .= '<br />Телефон: '.$telefon;


$subject = "Web mail from: " . $email;
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'To: Kontakt <info@rema.com.mk>' . "\r\n";
$headers .= "From: " . $email . "" . "\r\n";



if (isset($email) && $email != NULL) {

    if ($do === "1") {
        $to = "servis@rema.com.mk";
        mail($to, $subject, $poraka, $headers);
        echo "<br /><div class=\"col-md-6\"><p>Почитувани, вашата порака беше успешно испратена до Сервисот на Рема Компјутери. Вашето барање ќе биде процесирано и ќе добиете повратен одговор на вашиот емаил: " . $email . " во рок од 48 часа.<br /> Продолжете до <a href=\"/\">Рема Компјутери</a></p></div>";
    } else {
        $to = "info@rema.com.mk";
        mail($to, $subject, $poraka, $headers);
        echo "<br /><div class=\"col-md-6\"><p>Почитувани, вашата порака беше успешно испратена до одделот за продажба на Рема Компјутери. Вашето барање ќе биде процесирано и ќе добиете повратен одговор на вашиот емаил: " . $email . " во рок од 48 часа.<br /> Продолжете до <a href=\"/\">Рема Компјутери</a></p></div>";
    }
} else {
    echo "<br /><div class=\"col-md-6\"><p>Ве замолуваме да ја потполните формата за контакт</p></div>";
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

