<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="row" align="center">
    <h1>Profile <small><a href="/logout.php">logout</a></small></h1>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?= $email ?>
    </div>
    <div class="col-md-4"></div>
</div>
</body>
</html>