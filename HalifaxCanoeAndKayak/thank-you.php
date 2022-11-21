<?php


$email = $_GET['email'];
$location = $_GET['location'];
$trip_date = $_GET['tripdate'];



?>
<html>
    <h1>Thank You</h1><hr>
    <p>Thank you <?=$email?></p>
    <p>We will contact you about the <?=$location?> trip on <?=$trip_date?>
</html>