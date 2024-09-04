<?php 
session_start();
$usuarios = ["Ana", "Erick", "Luanna", "Pedro", "Victor", "Walter"];
$senhas = [
    "Ana" => "04", 
    "Erick" => "05", 
    "Luanna" => "14", 
    "Pedro" => "19", 
    "Victor" => "21", 
    "Walter" => "23"];
?>

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
        <form action="<? $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="user">Usuário:</label>
            <input type="text" name="user" id="user">

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password">

            <input type="submit" name="submit" value="Login">
        </form>
    </main>

    <?php 
        if (isset($_POST["user"]) && isset($_POST["password"])) {
            $usuario = $_POST["user"];
            $senha = $_POST["password"];

            if (in_array($usuario, $usuarios) && $senha === $senhas[$usuario]) {
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