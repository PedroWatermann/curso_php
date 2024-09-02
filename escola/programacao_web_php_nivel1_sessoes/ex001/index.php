<?php
session_start();
$_SESSION["user"] = "Admin";
$_SESSION["pass"] = "12345";
?>

<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <header>
            <h1>Login</h1>
        </header>

        <main>
            <form action="login.php" method="post">
                <label for="usuario">Usuário:</label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuário">

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Senha" pattern="[0-9]+">

                <input type="submit" value="Login" class="btn">
            </form>
        </main>
    </body>

    </html>