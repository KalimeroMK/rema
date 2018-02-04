<?php
session_start();
require_once 'config/conf.php';
$language = $_POST['lang'];
if ($language === "mk") {
    $_SESSION['lang'] = "mk";
    require_once 'language/mk.php';
} else if ($language === "en") {
    $_SESSION['lang'] = "en";
    require_once 'language/en.php';
}
if (isset($_SESSION['lang']) && $_SESSION['lang'] === "en") {
    $_SESSION['lang'] = "en";
    require_once 'language/en.php';
} else {
    $_SESSION['lang'] = "mk";
    require_once 'language/mk.php';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo constant("TITLE"); ?></title>
    <link rel="shortcut icon" href="images/icons/settings_small.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/style.css" rel="stylesheet" media="screen">
</head>
<body>
    <script type="text/javascript" src="js/jquery_1.5.2.js"></script>
    <script type="text/javascript" src="js/file_uploads.js"></script>
    <script type="text/javascript" src="js/vpb_script.js"></script>
    <script type="text/javascript" src="js/bootstrap.file-input.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script>$(document).ready(function() {
        $('input[type=file]').bootstrapFileInput();
    });</script>
    <header class="navbar navbar-default navbar-fixed-top navbar-default-color">
        <a class="navbar-brand" href="/">
            <img src="http://rema.mk/admin/images/icons/settings_small.png" alt="CMS" /></a>
            <ul class="nav navbar-nav navbar-right">
                <li><form action="" method="post" /><input type="hidden" value="en" name="lang" /><img src="http://rema.mk/admin/images/icons/enflag.png" alt="English" /><button class="btn btn-xs" type="submit"><?php echo constant("LANG_EN"); ?></button></form></li>
                <li><form action="" method="post" /><input type="hidden" value="mk" name="lang" /><img src="http://rema.mk/admin/images/icons/mkflag.png" alt="Македонски" /><button class="btn btn-xs" type="submit"><?php echo constant("LANG_MK"); ?></button></form></li>
            </ul>
        </header>
        <div class="container" style="margin-top: 5em">
            <div class="push"></div>
            <?php
            session_start();
            $scriptname = $_SERVER['SCRIPT_NAME'];
            $pagetitle = str_replace(".php", "", $scriptname);
            $pagetitlefinal = strtoupper(str_replace("/", "", $pagetitle));
            if (isset($_SESSION['user_email'])) {
                echo '
                <ol class="breadcrumb">
                    <li><a href="/">  <button class="btn btn-primary btn-xs" type="button">' . ADMIN_PANEL . '</button></a></li>
                    <li><a href="'.$_SERVER['SCRIPT_NAME'].'">  <button class="btn btn-primary btn-xs" type="button">' . $pagetitlefinal . '</button></a></li>
                    <li class="active pull-right">' . LOGGED_IN_AS . ' : ' . $_SESSION['name'] . '<a href="/logout.php"> [ Logout ]</a></li>
                </ol>
                ';
            }
            ?>
