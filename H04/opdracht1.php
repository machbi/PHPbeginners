<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H4 - opdracht 1</title>
</head>
<body>

</body>
</html>

<?php

function converteerCelsiusNaarFahrenheit($celsius) {
    $fahrenheit = $celsius * 1.8 + 32;
    echo "{$celsius} graden celsius staat gelijk aan {$fahrenheit}<br>\n";
}

//Check of de  functie werkt
for ($i = -10; $i < 40; $i++){
    converteerCelsiusNaarFahrenheit($i);
}


?>