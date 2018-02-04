<html>
    <head>
        
    </head>
    <body>

        <?php
        require_once 'config/conf.php';

        $sql = mysqli_query($con, "SELECT * FROM catalogimages ");


        $xml = ' <content width="600" height="811" bgcolor="cccccc" loadercolor="ffffff" panelcolor="5d5d61" buttoncolor="5d5d61" textcolor="ffffff">';

        while ($row = mysqli_fetch_array($sql)) {
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
        ?>
    </body>
</html>