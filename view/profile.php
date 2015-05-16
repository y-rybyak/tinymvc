<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">TinyMVC</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?= $result ?>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">Yaroslav Rybyak <?= date('Y') ?></p>
    </div>
</footer>
</body>
</html>