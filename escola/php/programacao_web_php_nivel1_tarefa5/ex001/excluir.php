<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>

<body>
    <header>
        <h1>Excluir aluno</h1>
    </header>

    <header>
        <?php 
            $id = $_GET["id"];
            unset($_SESSION["nomes"][$id]);
            unset($_SESSION["idades"][$id]);
            if (empty($_SESSION["nomes"][$id]) && empty($_SESSION["idades"][$id])) {
                echo "
                    <script>
                        alert('Aluno excluído com sucesso!');
                        history.go(-1);
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert(Um erro inesperado aconteceu!');
                        history.go(-1);
                    </script>
                ";
            }
        ?>
    </header>

    <footer>
        <button onclick="history.go(-1)">&lArr; Voltar</button>
    </footer>
</body>

</html>