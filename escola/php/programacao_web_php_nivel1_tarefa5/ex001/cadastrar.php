<?php
session_start();
$ids = $_SESSION["ids"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>Cadastro de alunos</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" pattern="[a-zA-ZÀ-ÿ ]+" title="Somente letras são permitidas." autocomplete="off">


            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" min="0" step="1">

            <input type="submit" value="Cadastrar &plusb;" name="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            if (!empty($nome) && !empty($idade)) {
                $nomes = $_SESSION["nomes"];
                $idades = $_SESSION["idades"];
                $nomes[$ids] = $nome;
                $idades[$ids] = $idade;
                $_SESSION["nomes"] = $nomes;
                $_SESSION["idades"] = $idades;
                $ids++;
                $_SESSION["ids"] = $ids;
                echo "
                    <script>
                        alert('Aluno cadastrado com sucesso!');
                    </script>
                ";
                $ids = $_SESSION["ids"];
                // var_dump($ids);
            } else {
                echo "
                <script>
                    alert('Preencha todos os campos!');
                    document.getElementById('nome').value = '$nome';
                    document.getElementById('idade').value = '$idade';
                </script>
            ";
            }
        }
        ?>
    </main>

    <footer>
        <button onclick="location.href='index.php'">&#x1F3E0; Início</button>
        <button onclick="location.href='listar.php'">&equiv; Listar</button>
    </footer>
</body>

</html>