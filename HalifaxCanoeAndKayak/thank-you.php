<?php
include './templates/header.html';
include './templates/popout.html';

$email = $_GET['email'];
$location = $_GET['location'];
$trip_date = $_GET['tripdate'];



?>
<html>
    <head><link rel="stylesheet" href="./css/main.css" type="text/css"></head>
    <h1>Thank You</h1><hr>
    <p>Thank you <?=$email?></p>
    <p>We will contact you about the <?=$location?> trip on <?=$trip_date?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</html>
