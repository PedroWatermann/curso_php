<?php
session_start();
if (!isset($_SESSION["produtos"])) {
    $_SESSION["produtos"] = [];
}
if (!isset($_SESSION["precos"])) {
    $_SESSION["precos"] = [];
}
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
        <h1>Cadastro de produtos</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="produto">Nome do produto:</label>
            <input type="text" name="produto" id="produto">

            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01">

            <input type="submit" value="&plusb; Cadastrar" name="submit" id="submit" disabled="disabled">
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $produto = strtolower($_POST["produto"]);
            $preco = strtolower($_POST["preco"]);

            $_SESSION["produtos"][] = $produto;
            $_SESSION["precos"][] = $preco;

            echo "
                <script>
                    alert('Produto cadastrado com sucesso!');
                </script>
            ";
        }
        ?>
    </main>

    <footer>
        <button onclick="location.href='listar.php'">&equiv; Listar Produtos</button>
    </footer>

    <script>
        const prod = document.getElementById('produto');
        const prec = document.getElementById('preco');
        const btn = document.getElementById('submit');

        function verifCampos() {
            if (prod.value.trim() == '' || prec.value.trim() == '') {
                btn.disabled = true;
            } else {
                btn.disabled = false;
            }
        }

        prod.addEventListener('input', verifCampos);
        prec.addEventListener('input', verifCampos);
    </script>
</body>

</html>