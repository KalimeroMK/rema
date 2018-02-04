<?php require_once 'config/conf.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Booklet - jQuery Plugin</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>  
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/jquery.booklet.latest.js" type="text/javascript"></script>
        <link href="css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />

        <style type="text/css">
            body {background-image: url('images/bg.jpg'); background-size: 100%;  font:normal 12px/1.2 arial, verdana, sans-serif;}
        </style>

        <script type="text/javascript">
            $(function() {
                $('#mybook').booklet({
                    width: '80%',
                    height: '100%',
                   // next: '#custom-next',
                    // prev: '#custom-prev',
                    closed: true,
                    autoCenter: true,
                    arrows: true,
                   // arrowsHide: true,
                    keyboard: true,
                    menu: '#custom-menu',
                    pageSelector: true,
                    auto: true,
                    delay: 5000,
                    play: '#play',
                    pause: '#pause'
                });
            });
        </script>

    </head>
    <body>
        <header>
            <img src='/images/rema.png' style='border-radius: 15px;' />
        </header>
        <section>
            <div id="mybook" >
                <?php
                $sql = mysqli_query($con, "SELECT * FROM catalogimages ");

                while ($row = mysqli_fetch_array($sql)) {
                    echo '
  <div class="sliki"  >     
<img style="margin:0 auto; display:block; margin-top:10%; margin-bot:10%; " alt="' . $row['title'] . '"  id="catalog-img-' . $row['id'] . '" src="' . $row['image'] . '"/>
</div>
';
                }
                ?>
            </div>
        </section>
        <footer></footer>
    </body>
</html>