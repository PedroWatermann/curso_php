<?php
session_start();
$_SESSION["user"] = "Ademiro";
$_SESSION["pass"] = "1234567";
$_SESSION["date"] = date('d/m/Y');
?>

<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>

    <body>
        <header>
            <h1>Login</h1>
        </header>

        <main>
            <form action="login.php" method="post">
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" id="usuario" placeholder="Ademiro">

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="1234567" pattern="[0-9]+" minlength="7" maxlength="7">

                <input type="submit" value="Login" class="btn">
            </form>
        </main>
    </body>

    </html>