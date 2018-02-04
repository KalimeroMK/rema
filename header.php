<!DOCTYPE html>
<?php

// Create connection
$con = mysqli_connect("localhost", "rema", "simeon08", "rema");
// za kirilica od baza
mysqli_query($con, "SET NAMES UTF8");
// Check connection
if (mysqli_connect_errno($con)) {
	echo "Failed to connect to MySQLI: " . mysqli_connect_error();
}
?>
<html>
<script src="/js/jquery.js" type="text/javascript" charset="utf-8" async defer></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="article:author" content="https://www.facebook.com/Sefot" />
    <meta name="author" content="Zoran Shefot Bogoevski">

    <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/style.css" rel="stylesheet" media="screen">
    <title>Компјутери</title>
</head>
<body>

