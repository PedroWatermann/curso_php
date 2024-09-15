<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Grupos</title>
</head>

<body>
    <header>
        <h1>Cadastro de grupos</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="grupo">Grupo animal:</label>
            <input type="text" name="grupo" id="grupo">

            <input type="submit" value="&plusb; Cadastrar" name="submit" id="submit" disabled="disabled">
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $grupo = strtolower($_POST["grupo"]);
            // $_SESSION["grupos"][] = $grupo;
            $_SESSION["grupos"][$grupo] = [];
            echo "
                <script>
                    alert('Grupo cadastrado com sucesso!');
                </script>
            ";
        }
        ?>
    </main>

    <footer>
        <button onclick="location.href='index.php'">&#8962; Início</button>
        <button onclick="location.href='lisGrup.php'">&equiv; Listar Grupos</button>
    </footer>

    <script>
        let grupo = document.getElementById("grupo");
        let submit = document.getElementById("submit");

        grupo.addEventListener('input', () => {
            if (grupo.value.trim() !== '') {
                submit.disabled = false;
            } else {
                submit.disabled = true;
            }
        });
    </script>
</body>

</html>