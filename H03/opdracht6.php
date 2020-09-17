<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H03 - opdracht 6</title>
    <style>
        table, tr, td {
            border: solid black 1px;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        img {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<table>


<?php
$swimmingClub = array(
    "de spartelkuikens" => 25,
    "de waterbuffels" => 32,
    "plonsmderin" => 11,
    "bommetje" => 23
);

foreach ($swimmingClub as $club => $swimmersAmount){

    echo '<tr>';

    //CLUBNAMEN
    echo "<td>$club</td>";


    //ZWEMMERSAANTALLEN
    echo "<td>$swimmersAmount</td>";

    //PLAATJES
    echo '<td>';
    $images = floor($swimmersAmount / 5);
     for ($i = 0; $i < $images ; $i++){
     echo '<img src="//unsplash.it/50" alt="image">';
 }
 echo '</td>';
 echo '</tr>';
    }
?>
</table>
</body>
</html>