<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H4 Opdracht 1</title>
</head>
<body>
</body>
</html>

<?php
for ($i = 1; $i < 10 ; $i++) {
    echo '<img src="apen/aap' . $i . '.jpg" alt="aap">';
}

$afbeeldingAap = array('aap1.jpg','aap2.jpg','aap3.jpg','aap4.jpg','aap5.jpg','aap6.jpg','aap7.jpg','aap8.jpg','aap9.jpg');

$teller = 1;
foreach ($afbeeldingAap as $aap){
    echo '<img src="apen/' . $aap . ' "alt ="Aap ' . $teller . '">';
}
?>


