<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./styles/login.css">
    </head>
    <body>
        <div class="login-form">
            <h1>Login</h1>
            <form action="controle.php" method="post">
                <p></p>
                Name:<br>
                <input type="text" name="nome" required>
                <p></p>
                Password:<br>
                <input type="password" name="senha" required>
                <p></p>
                <input type="hidden" name="op" value="log">
                <center><button type="submit" class="btn btn-primary">Submit!</button></center>
            </form>
            <a href="cadastro.php">Register</a>
        </div>
    </body>
</html>