<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H3 - Opdracht 2</title>
</head>
<body>
</body>
</html>
<style>
div#kerstboom {
    text-align: center;
}
</style>
<div id="kerstboom">
<?php
for ($i = 1;  $i <= 10; $i++){
    echo '<div class="row">';
    for ($j = 0; $j < $i; $j++){
        echo '*';
        }

    echo "</div>\n";
    }
?>
</div>
