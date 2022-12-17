<?php
$directory = dirname(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/assets/whitecanvasco_ico.webp">
    <title>White Canvas Co</title>
    <link rel="stylesheet" href="/public/src/css/main.css" />
</head>

<body>
    <div class="section__wrapper">
        <?php include($directory . "/public/templates/homepage.php"); ?>
    </div>
</body>

<script src="./src/js/app.js"></script>

</html>