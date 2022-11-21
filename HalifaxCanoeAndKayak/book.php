<?php
include './templates/header.html';
include './templates/popout.html';

?>

<html>
    <head><link rel="stylesheet" href="./css/main.css" type="text/css"></head>

<body>
    <form action="thank-you.php" method="GET">
        <label for="email">Email</label> 
        <input type="text" name="email" placeholder="name@example.com" required/><br>
        <label for="location">Location</label>
        <select name="location" id="location" required>
            <option value="Halifax">Halifax</option>
            <option value="Sydney">Sydney</option>
        </select>
        <label for="tripdate">Trip Date</label>
        <input type="date" name="tripdate" required/>
        <input type="submit" value="book">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>