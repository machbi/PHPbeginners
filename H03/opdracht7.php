<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H03 - opdracht 8</title>
</head>
<body>

</body>
</html>

<?php

$kappersAgenda = [
    "9:15" => "Mevr. Pietersen",
    "9.30" => "Mevr. Willems",
    "9.45" => "",
    "10.00" => "Paul van den Broek",
    "10.15" => "Karel de Meeuw",
    "10.30" => ""
];

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersAgenda as $tijd => $afspraak) {
if($afspraak == "") {
print("<li>".$tijd."</li>") ;
}
}
print("</ul>");
highlight_file('opdracht7.php');