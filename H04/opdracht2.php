<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H4 - opdracht 2</title>
</head>
<body>

</body>
</html>

<?php
for ($i = - 10; $i <= 30; $i++){
$truefalse = checkIfDividableByThree($i) ? " " : " niet ";
echo "{$i} is{$truefalse}deelbaar door drie.<br>\n";
}

function checkIfDividableByThree($getal) {
    return $getal % 3 === 0 ? true : false;
}




?>