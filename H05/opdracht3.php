<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>H5 opdracht 3</title>
</head>
<body class="container">
<h1>Selecteer welke dieren je wilt zien</h1>
<form action="opdracht3processing.php" method="get">
<div class="form-group">
    <select class="form-control" name="dierennaam[]" id="dierennaam" multiple>
        <option value="hond">Hond</option>
        <option value="aap">Aap</option>
        <option value="beer">Beer</option>
        <option value="slak">Slak</option>
    </select>
</div>
    <button class="btn btn-primary"> Laat zien! </button></form>


</body>
</html>


<?php
