<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <header>
        <h1>Editar aluno</h1>
    </header>

    <main>
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        } elseif (isset($_POST["id"])) {
            $id = $_POST["id"];
        } else {
            echo "<script>alert('ID não encontrado!'); location.href='listar.php';</script>";
            exit;
        }
        ?>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">

            <label for="novoNome">Nome:</label>
            <input type="text" name="novoNome" id="novoNome" pattern="[a-zA-ZÀ-ÿ ]+" title="Somente letras são permitidas." autocomplete="off" value="<?= $_SESSION["nomes"][$id] ?>">

            <label for="novaIdade">Idade:</label>
            <input type="number" name="novaIdade" id="novaIdade" min="0" step="1" value="<?= $_SESSION["idades"][$id] ?>">

            <button onclick="history.go(-1)">&cross; Cancelar</button>
            <input type="submit" value="&check; Editar" name="submit">
        </form>
    </main>

    <?php
    if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $novoNome = $_POST["novoNome"];
        $novaIdade = $_POST["novaIdade"];

        print_r($novoNome);

        if (!empty($novoNome) && !empty($novaIdade)) {
            $_SESSION["nomes"][$id] = $novoNome;
            $_SESSION["idades"][$id] = $novaIdade;
            echo "
                <script>
                    alert('Aluno editado com sucesso!');
                    location.href='listar.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Preencha todos os campos!');
                    document.getElementById('novoNome').value = '$novoNome';
                    document.getElementById('novaIdade').value = '$novaIdade';
                </script>
            ";
        }
    }
    ?>
</body>

</html>