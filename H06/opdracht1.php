<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style media="screen">
      table, tr, td {
        border: solid black 1px ;
        border-collapse: collapse;
        padding: 20;
      }
    </style>
</head>
<body>



<?php
$servername = "localhost";
$dbname = "id17560532_phpschool";
$username = "id17560532_root";
$password = "0[l%1R<4}G/}37&R";

try {
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . '<br>';
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die ('Error 1.');
$stmt->execute() or die ('Error 2.');

echo '<table>';

while ($array = $stmt->fetch()) {
  echo '<tr>';
  echo "<td>" . $array['cursistnr'] . "</td>";
  echo "<td>" . $array['naam'] . "</td>";
  echo "<td>" . $array['roepnaam'] . "</td>";
  echo "<td>" . $array['straat'] . "</td>";
  echo "<td>" . $array['postcode'] . "</td>";
  echo "<td>" . $array['plaats'] . "</td>";
  echo "<td>" . $array['geslacht'] . "</td>";
  echo "<td>" . $array['geb_datum'] . "</td>";
  echo '</tr>';

}

echo '</table>'

// $stmt = $conn->prepare("SELECT * FROM cursist") or die("Error 1");
// $stmt->execute() or die('Error 2');
// $row = $stmt->fetch() or die('Error 3');
// echo $row['roepnaam'];


?>

</body>
</html>
