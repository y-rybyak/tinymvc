<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" align="center">
            <h1>Login</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form name="loginForm" method="POST" action="../controller/controller_login.php">

                <div class="form-group">

                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" placeholder="Enter your email" id="email"
                           name="email">
                </div>
                <div class="form-group">

                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" id="password"
                           name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default pull-left" id="submitLogin"
                            name="submitLogin">Sign up
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>