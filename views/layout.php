<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sticky-footer.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <a class="navbar-brand">Yaroslav Rybyak</a>
            <li><a href="/">Home</a></li>
            <li><a href="?controller=posts&amp;action=index">Posts</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?php require_once('routes.php'); ?>
    </div>
    <div class="col-md-4"></div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted"><a href="https://github.com/y-rybyak" target="_blank">Yaroslav Rybyak</a> <?= date('Y') ?></p>
    </div>
</footer>
</body>
</html>