<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


$servername = "localhost";
$dbname = "school";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT * FROM cursist") or die("Error 1");
$stmt->execute() or die('Error 2');
$row = $stmt->fetch() or die('Error 3');
echo $row['roepnaam'];

?>

</body>
</html>