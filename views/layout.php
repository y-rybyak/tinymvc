<DOCTYPE html>
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
    <header>
        <a href='/'>Home</a>
        <a href='?controller=posts&action=index'>Posts</a>
    </header>
    <?php require_once('routes.php'); ?>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Yaroslav Rybyak 2015</p>
        </div>
    </footer>
    </body>
</html>