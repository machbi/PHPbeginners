<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H03 - Opdracht 04</title>
</head>
<body>
</body>
</html>

<style>
    img {
        width: 150px;
    }
    img.green-border {
        border: solid 2px green;
    }
    img.red-border {
        border: solid 2px red;
    }
</style>

<?php
for ($i = 1; $i < 10; $i++) {
    $borderColor = ($i % 2 == 0) ? "red" : "green";
    echo '<img class="' . $borderColor . '-border" src="apen/aap' . $i . '.jpg" alt="Aap' . $i . '">';
}
?>

