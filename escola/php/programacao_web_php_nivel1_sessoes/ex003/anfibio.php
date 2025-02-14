<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anfíbios</title>
</head>

<body>
    <header>
        <h1>Anfíbios</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <input type="submit" name="submit" value="Cadastrar">
        </form>

        <?php
        if (!isset($_SESSION["anfibios"])) {
            $_SESSION["anfibios"] = [];
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit"])) {
            $nome = strtolower($_GET["nome"]);
            if (isset($nome) && !empty($nome) && !in_array($nome, $_SESSION["anfibios"])) {
                $_SESSION["anfibios"][] = $nome;
                echo "<p>Anfíbio cadastrado com sucesso!</p>";
            } else if (isset($nome) && !empty($nome)) {
                echo "<p>Este anfíbio já existe em nossos registros!</p>";
            }
        }
        // var_dump($_SESSION["anfibios"]);
        ?>
    </main>

    <footer>
        <a href="listar_animais.php"><button>Listar animais</button></a>
        <a href="index.php"><button>&#x1F3E0; Início</button></a>
    </footer>
</body>

</html>