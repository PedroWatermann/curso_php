<?php
session_start();
$usu = $_SESSION["usuLogado"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidade</title>
    <style>
        footer a,
        footer form,
        footer form input {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Cadastrar cidades</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="cidade">Nome da cidade:</label>
            <input type="text" name="cidade" id="cidade">

            <input type="submit" value="Cadastrar" name="cadastrar">
        </form>

        <?php
        if (isset($_POST["cadastrar"])) {
            $cidade = strtolower($_POST["cidade"]);
            if (!empty($cidade) && !in_array($cidade, $_SESSION["cidades"][$usu])) {
                $_SESSION["cidades"][$usu][] = $cidade;

                echo "<p>Cidade cadastrada com sucesso!</p>";
            } else if (isset($_POST["cidade"]) && !empty($_POST["cidade"])) {
                echo "<script>alert('Esta cidade já existe em nossos registros!');</script>";
            } else {
                echo "<script>alert('Por favor, preencha os campos!');</script>";
            }
        }

        if (isset($_POST["listar"])) {
            echo "
                <h2>Cidades</h2>
                <ul>
            ";
            if (!empty($_SESSION["cidades"][$usu])) {
                foreach ($_SESSION["cidades"][$usu] as $key => $value) {
                    echo "<li>" . ucfirst($value) . "</li>";
                };
            } else {
                echo "<li>Nenhuma cidade cadastrada</li>";
            }
            echo "</ul>";
            // unset($_SESSION["cidades"]);
        }
        ?>
    </main>

    <footer>
        <a href="javascript:location.href = 'home.php'"><button>&lArr; Voltar</button></a>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="submit" value="Listar" name="listar">
            <input type="submit" value="Logout" name="logout">
        </form>
        <?php
        if (isset($_POST["logout"])) {
            header("Location: index.php");
        }
        ?>
    </footer>
</body>

</html>