<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Cadastro</h1>
    </header>

    <main>
        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" id="nome"
                        value="<?php
                                if (isset($_POST["nome"])) {
                                    echo $_POST["nome"];
                                }
                                ?>"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input type="tel" name="telefone" id="telefone"
                        value="<?php
                                if (isset($_POST["telefone"])) {
                                    echo $_POST["telefone"];
                                }
                                ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"
                        value="<?php
                                if (isset($_POST["email"])) {
                                    echo $_POST["email"];
                                }
                                ?>"></td>
            </tr>
            <tr>
                <td>Data de nascimento</td>
                <td><input type="date" name="dtNasc" id="dtNasc"
                        value="<?php
                                if (isset($_POST["dtNasc"])) {
                                    echo $_POST["dtNasc"];
                                }
                                ?>"></td>
            </tr>
        </table>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome"]) && isset($_POST["telefone"]) && isset($_POST["email"]) && isset($_POST["dtNasc"]) && !empty($_POST["dtNasc"])) {
        ?>
            <script>
                alert("Usuário cadastrado com sucesso!");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Favor, informar todos os campos!");
                history.go(-1);
            </script>
        <?php
        }
        ?>
    </main>
</body>

</html>