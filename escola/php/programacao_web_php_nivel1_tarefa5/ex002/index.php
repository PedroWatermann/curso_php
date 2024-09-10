<?php 
session_start();

$_SESSION["usuarios"] = [
    1 => "Admin1",
    2 => "Admin2"
];
$_SESSION["senhas"] = [
    1 => "1234",
    2 => "5678"
];
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
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario" placeholder="Admin1 ou Admin2">

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="1234 ou 5678">

            <input type="submit" value="Login" name="submit">
        </form>
    </main>

    <?php 
        if (isset($_POST["submit"])) {
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $indice = array_search($usuario, $_SESSION["usuarios"]);

            if ($indice != false) {
                if ($senha == $_SESSION["senhas"][$indice]) {
                    header("Location: inicio.php");
                    exit;
                } else {
                    echo "
                        <script>
                            alert('Senha incorreta!');
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Usuário incorreto!');
                    </script>
                ";
            }
        }
    ?>
</body>

</html>