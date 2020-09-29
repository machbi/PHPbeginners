<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H04 - opdracht 3</title>
</head>
<body>
<?php

// De input van de gebruiker
$originalString = "Dit was een lastige opdracht.";

// Lees eerst regel 17
// Hier roep je de functie aan 2/2.
echo reverseString($originalString);

// Dit is de functie 1/2
function reverseString($originalString)  {
    $stringLength = strlen($originalString);
    $productString = "";
    // Waarom moet achter $stringLength een  - 1?
    for ($i = $stringLength - 1; $i >= 0; $i--){
        $productString .= substr($originalString, $i, 1);
    }
    echo "{$originalString} <br> ofwel <br>";
    return $productString;
}

?>
</body>
</html>
