<?php


foreach ($_GET['dierennaam'] as $dierennaam) {
    echo '<img src=images/' . $dierennaam . '.jpg" alt"' . $dierennaam . '">';
    echo "{$dierennaam}.jpg<br>";
}



