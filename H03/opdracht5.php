<?php

define("FARE", 10);
define("SR_AGE", 65);
define("SR_DISC", 50);
define("JR_AGE", 12);
define("JR_DISC", 50);
define("INFANT_AGE", 3);
define("INFANT_DISC", 100);


echo '<table>';

for ($i = 0; $i <= 80; $i++){
    $age = $i;
    if ($age >= SR_AGE) {
        $price = FARE * ((100 - SR_DISC) / 100);
    } elseif ($age < INFANT_AGE) {
        $price = FARE * ((100 - INFANT_DISC) / 100);
    } elseif ($age <= JR_AGE){
        $price = FARE * ((100 - JR_DISC) / 100);
    } else {
        $price = FARE;
    }
    echo 'Iemand van ' . $age . ' betaalt €' . $price . ". <br>\n";
}

//if ($age >= SR_AGE) {
//    $price = FARE * ((100 - SR_DISC) / 100);
//} elseif ($age < INFANT_AGE) {
//    $price = FARE * ((100 - INFANT_DISC) / 100);
//} elseif ($age <= JR_AGE){
//    $price = FARE * ((100 - JR_DISC) / 100);
//} else {
//    $price = FARE;
//}
//
//echo 'Iemand van ' . $age . ' betaalt €' . $price . '.';