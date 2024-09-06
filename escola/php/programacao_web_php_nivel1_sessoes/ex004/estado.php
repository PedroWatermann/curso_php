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
        <h1>Cadastrar estados</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="estado">Nome do estado:</label>
            <input type="text" name="estado" id="estado">

            <input type="submit" value="Cadastrar" name="cadastrar">
        </form>

        <?php
        if (isset($_POST["cadastrar"])) {
            $estado = strtolower($_POST["estado"]);
            if (!empty($estado) && !in_array($estado, $_SESSION["estados"][$usu])) {
                $_SESSION["estados"][$usu][] = $estado;

                echo "<p>Estado cadastrado com sucesso!</p>";
            } else if (isset($_POST["estado"]) && !empty($_POST["estado"])) {
                echo "<script>alert('Este estado já existe em nossos registros!');</script>";
            } else {
                echo "<script>alert('Por favor, preencha os campos!');</script>";
            }
        }

        if (isset($_POST["listar"])) {
            echo "
                <h2>Estados</h2>
                <ul>
            ";
            if (!empty($_SESSION["estados"][$usu])) {
                foreach ($_SESSION["estados"][$usu] as $key => $value) {
                    echo "<li>" . ucfirst($value) . "</li>";
                };
            } else {
                echo "<li>Nenhuma cidade cadastrada</li>";
            }
            echo "</ul>";
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