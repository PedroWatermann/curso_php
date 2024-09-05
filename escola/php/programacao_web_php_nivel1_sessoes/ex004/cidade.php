<?php session_start() ?>

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
            if (!empty($_POST["cidade"]) && !in_array($_POST["cidade"], $_SESSION["cidades"])) {
                $cidade = $_POST["cidade"];
                $_SESSION["cidades"][] = $cidade;
                echo "<p>Cidade cadastrada com sucesso!</p>";
            } else if (isset($_POST["cidade"]) && !empty($_POST["cidade"])) {
                echo "<p>Esta cidade já existe em nossos registros!</p>";
            } else {
                echo "<script>alert('Por favor, preencha os campos!');</script>";
            }
        }
        ?>
    </main>

    <footer>
        <a href="javascript: history.go(-1)"><button>&lArr; Voltar</button></a>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="submit" value="Listar cidades" name="listar">
            <input type="submit" value="Logout" name="logout">
        </form>
        <?php
        if (isset($_POST["logout"])) {
            header("Location: index.php");
        }
        if (isset($_POST["listar"])) {
            $cidades = $_SESSION["cidades"];
            var_dump($cidades);
        }
        ?>
    </footer>
</body>

</html>