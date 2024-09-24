<?php
session_start();
if (!isset($_SESSION["cidades"])) {
    $_SESSION["cidades"] = [];
};
if (!isset($_SESSION["populacoes"])) {
    $_SESSION["populacoes"] = [];
};
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
        <h1>Cadastro de cidades</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade">

            <label for="populacao">População:</label>
            <input type="number" name="populacao" id="populacao">

            <input type="submit" value="&plusb; Cadastrar" name="submit" id="submit" disabled="disabled">
        </form>

        <?php 
        if (isset($_POST["submit"])) {
            $cidade = strtolower($_POST["cidade"]);
            $populacao = strtolower($_POST["populacao"]);

            $_SESSION["cidades"][] = $cidade;
            $_SESSION["populacoes"][] = $populacao;

            echo "
                <script>
                    alert('Cidade cadastrada com sucesso!');
                </script>
            ";
        }
        ?>
    </main>

    <footer>
        <button onclick="location.href='listar.php'">&equiv; Listar Cidades</button>
    </footer>

    <script>
        const cidade = document.getElementById('cidade');
        const popula = document.getElementById('populacao');
        const submit = document.getElementById('submit');

        function validaCampos() {
            if (cidade.value.trim() == '' || popula.value.trim() == '') {
                submit.disabled = true;
            } else {
                submit.disabled = false;
            }
        }

        cidade.addEventListener('input', validaCampos);
        popula.addEventListener('input', validaCampos);
    </script>
</body>

</html>