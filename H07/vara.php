<?php
    // $a = 12;
    // setcookie("a", $a);
    // echo $a."<br />";

    session_start();

    $_SESSION['user'] = "jan";
    echo $_SESSION['user'];

 ?>

<p><a href="varb.php">naar varb.php</a></p>
