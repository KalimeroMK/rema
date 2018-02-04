<?php require_once '../config/conf.php'; ?>
<?php
$image = $_POST['slika'];
$title = $_POST['name'];

if ($image == NULL) {
    echo "error";
} else {

    $sql = "INSERT INTO catalogimages (image, title) VALUES ('$image','$title')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    $sqlcat = mysqli_query($con, "SELECT * FROM catalogimages ");


    $xml = ' <content width="1200" height="1622" bgcolor="cccccc" loadercolor="ffffff" panelcolor="5d5d61" buttoncolor="5d5d61" textcolor="ffffff">';



    while ($row = mysqli_fetch_array($sqlcat)) {
        $xml .= '

	<page src="../' . $row['image'] . '"/>
                   ';
    }
    $xml .= '</content>';
    echo $xml;
    $File = "katalog/xml/Pages.xml";
    $Handle = fopen($File, 'w+');
    fwrite($Handle, $xml);
    fclose($Handle);


    header('Location: ../index.php');

    mysqli_close($con);
}
?>
</body>
</html>