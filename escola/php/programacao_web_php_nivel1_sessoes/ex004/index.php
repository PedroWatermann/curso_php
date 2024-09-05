<?php
session_start();

if (isset($_SESSION["usuLogado"])) {
    header("Refresh: 0");
}

unset($_SESSION["usuarios"]);
unset($_SESSION["senhas"]);
unset($_SESSION["usuLogado"]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }
    </style>

</head>

<body>
    <header>
        <h1>Login</h1>
    </header>

    <main>
        <form action="<? $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="user">Usuário:</label>
            <input type="text" name="user" id="user">

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">

            <input type="submit" name="submit" value="Login">
        </form>
    </main>

    <?php
    $_SESSION["usuarios"] = $usuarios = ["Ana", "Erick", "Luanna", "Pedro", "Victor", "Walter"];
    $_SESSION["senhas"] = $senhas = [
        "Ana" => "04",
        "Erick" => "05",
        "Luanna" => "14",
        "Pedro" => "19",
        "Victor" => "21",
        "Walter" => "23"
    ];
    $_SESSION["cidades"] = [];
    $_SESSION["estados"] = [];
    $_SESSION["paises"] = [];

    if (isset($_POST["user"]) && isset($_POST["password"])) {
        $usuario = $_POST["user"];
        $senha = $_POST["password"];

        if (in_array($usuario, $usuarios) && $senha === $senhas[$usuario]) {
            $_SESSION["usuLogado"] = $usuario;
            header("Location: home.php");
            exit;
        } else {
            echo "
                    <script>
                        alert('Usuário ou senha incorretos!');
                    </script>
                ";
        }
    }
    ?>
</body>

</html>