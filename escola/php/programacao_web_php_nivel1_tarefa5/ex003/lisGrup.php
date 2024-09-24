<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Grupos</title>
</head>

<body>
    <header>
        <h1>Listagem de grupos</h1>
    </header>

    <main>
        <ul>
            <h2>Grupos:</h2>
            <?php
            if (empty($_SESSION["grupos"])) {
                echo "<li>Nenhum grupo cadastrado!</li>";
            } else {
                foreach ($_SESSION["grupos"] as $key => $value) {
                    if (is_string($key)) {
                        echo "<li>" . ucfirst($key) . "</li>";
                    }
                }
            }
            ?>
        </ul>
    </main>

    <footer>
        <button onclick="location.href='index.php'">&#8962; Início</button>
        <button onclick="location.href='cadGrup.php'">&plusb; Cadastar Grupos</button>
    </footer>
</body>

</html>