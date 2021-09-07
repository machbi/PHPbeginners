<?php
$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];

function check_credentials($mailadres, $wachtwoord){

    global $users;
    foreach ($users as $key => $value) {
        if ($key == $mailadres && $value == $wachtwoord) {
            // als we een match hebben zien we "Welkom"
            return true;
        }
    }
    return false;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 5</title>
</head>
<body>
<?php if (!isset($_POST['knop'])) { ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Naam: <input type="text" name="mailadres" placeholder="mailadres"><br>
        Wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord">
        <input type="submit" name="knop" value="Verstuur">
    </form>

    <?php
} else {

    // input valideren (bestaan de vars en zijn ze niet leeg?
    if (!isset($_POST['mailadres']) OR empty($_POST['mailadres'])) {
        header("Location: {$_SERVER['PHP_SELF']}");
    }
    if (!isset($_POST['wachtwoord']) OR empty($_POST['wachtwoord'])) {
        header("Location: {$_SERVER['PHP_SELF']}");
    }

    // mailadres en wachtwoord opslaan in lokale variabelen
    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];


//  tussentijdse check:  echo "Dit is de data: {$mailadres} en {$wachtwoord}";


    if (check_credentials($mailadres,  $wachtwoord)) {
        exit("Welkom!");
    } else {
        exit("Sorry, geen toegang!");
    }


    // loopen door een associatieve array met geldige logingegegevens



//    // En anders zien we "Sorry, geen toegang".
//    exit("Access denied");
} ?>


</body>
</html>
