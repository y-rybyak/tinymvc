<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" align="center">
            <h1>Profile</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?=$_SESSION["data"]["varFirstName"] . " " . $_SESSION["data"]["varSurname"]?>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>