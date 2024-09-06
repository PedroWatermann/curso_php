<?php
session_start();
$usu = $_SESSION["usuLogado"];
if (is_null($usu)) {
    echo "
        <script>
            alert('Usuário não logado!');
            window.location.href = 'index.php';
        </script>
    ";
} else {
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        img {
            max-width: 230px;
            max-height: 230px;
            object-fit: cover;
        }

        figcaption {
            padding: 10px;
            opacity: 0;
            transition: opacity 0.5s ease-out;
            font-family: cursive;
            font-size: large;
        }

        a {
            text-decoration: none;
            color: black;
            text-align: center;
        }

        footer {
            margin-top: 20px;
        }

        .wrapper {
            display: flex;
            width: 400px;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
        }

        .card1 {
            background-color: #87CEEB;
        }

        .card2 {
            background-color: #F2C464;
        }

        .card3 {
            background-color: #8BC34A;
        }

        .card {
            flex: 1;
            height: 100%;
            transition: flex 0.5s ease;
            cursor: pointer;

            display: flex;
            flex-direction: column;
            overflow: hidden;
            justify-content: center;
            align-items: center;
        }

        .card:hover {
            flex: 3;
        }

        .card:hover figcaption {
            opacity: 1;
        }
    </style>
</head>

<body>
    <header>
        <h1>Olá, <?= $usu ?>. Bem-<?php if ($usu == 'Ana' || $usu == 'Luanna') {
                                        echo "vinda";
                                    } else {
                                        echo "vindo";
                                    } ?>!</h1>
    </header>
    <div class="wrapper">
        <div class="card card1">
            <a href="cidade.php">
                <img src="imagens/cidade.png" alt="Cidade">
                <figcaption>Cadastrar cidade</figcaption>
            </a>
        </div>
        <div class="card card2">
            <a href="estado.php">
                <img src="imagens/estado.png" alt="Estado">
                <figcaption>Cadastrar estado</figcaption>
            </a>
        </div>
        <div class="card card3">
            <a href="pais.php">
                <img src="imagens/pais.png" alt="País">
                <figcaption>Cadastrar país</figcaption>
            </a>
        </div>
    </div>
    <footer>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="submit" value="Logout" name="logout">
        </form>

        <?php
        if (isset($_POST["logout"])) {
            // var_dump($_SESSION["usuarios"]);
            // var_dump($_SESSION["senha"]);
            // echo "<br><br>";

            // unset($_SESSION["usuarios"]);
            // unset($_SESSION["senhas"]);

            // var_dump($_SESSION["usuarios"]);
            // var_dump($_SESSION["senha"]);
            // echo "<br><br>";

            header("Location: index.php");
        }
        ?>
    </footer>
</body>

</html>