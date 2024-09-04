<?php session_start() ?>

<!DOCTYPE html>
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
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="user">Usuário:</label>
            <input type="text" name="user" id="user">

            <label for="password">Senha:</label>
            <input type="password" name="pasword" id="password">

            <input type="submit" name="submit" value="Login">
        </form>

        <?php
        $usuarios = [
            1 => "Ana",
            2 => "Erick",
            3 => "Luanna",
            4 => "Pedro",
            5 => "Victor",
            6 => "Walter"
        ];
        $senhas = [
            1 => "04",
            2 => "05",
            3 => "14",
            4 => "19",
            5 => "21",
            6 => "23"
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            if (!isset($_POST["user"]) && !isset($_POST["password"])) {
                $user = $_POST["user"];
                $password = $_POST["password"];
                $existe = in_array($user, $usuarios);
                if (!in_array($password, $senhas)) {
                    echo "
                        <script>
                           alert(\"Usuário inválido!\");
                        </script>
                    ";
                }
            }
        }
        ?>
    </main>
</body>

</html>