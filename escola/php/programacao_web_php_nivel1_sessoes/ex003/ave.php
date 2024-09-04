<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aves</title>
    <style>
        body {
            /* background-image: url(https://images.pexels.com/photos/27029446/pexels-photo-27029446/free-photo-of-natureza-passaro-ave-passarinho.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; */

            background: url(https://images.pexels.com/photos/27029446/pexels-photo-27029446/free-photo-of-natureza-passaro-ave-passarinho.jpeg) top right no-repeat fixed;
            background-size: cover;
            overlay: 0.5;
        }

        h1 {
            margin: 0 0 20px 0;
        }

        .container {
            border: 2px solid white;
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Aves</h1>
        </header>
        <main>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
                <input type="submit" name="submit" value="Cadastrar">
            </form>
            <?php
            if (!isset($_SESSION["aves"])) {
                $_SESSION["aves"] = [];
            }
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit"])) {
                $nome = strtolower($_GET["nome"]);
                if (isset($nome) && !empty($nome) && !in_array($nome, $_SESSION["aves"])) {
                    $_SESSION["aves"][] = $nome;
                    echo "<p>Ave cadastrada com sucesso!</p>";
                } else if (isset($nome) && !empty($nome)) {
                    echo "<p>Esta ave já existe em nossos registros!</p>";
                }
            }
            // var_dump($_SESSION["aves"]);
            ?>
        </main>

        <footer>
            <a href="listar_animais.php"><button>Listar animais</button></a>
            <a href="index.php"><button>&#x1F3E0; Início</button></a>
        </footer>
    </div>
</body>

</html>