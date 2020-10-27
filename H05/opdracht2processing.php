<?php


if (isset($_POST['naam']) && !empty($_POST['naam'])){
    $naam = $_POST['naam'];
} else {
    echo "Let op: je hebt geen naam ingevuld<br>\n";
}



$naam = $_POST['naam'];
$email = $_POST['email'];
$password = $_POST ['password'];
echo "Je hebt de volgende gegevens ingevuld:<br>\n";
echo "Naam: {$naam}<br>";
echo "Email: {$email}<br>";
echo "Password: {$password}<br>";
