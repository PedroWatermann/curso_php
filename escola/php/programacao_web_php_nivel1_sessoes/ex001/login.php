<!-- Apenas ignore o nome das variáveis -->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <header>
        <h1>Login</h1>
    </header>
    
    <main>
        <?php
            if (isset($_POST["usuario"]) && isset($_POST["senha"])) 
            {
                $usua = $_POST["usuario"] ?? "";
                $senh = $_POST["senha"] ?? "";
                $data = $_SESSION["date"];
                date_default_timezone_set('America/Sao_Paulo');
                $hora = date('H:i:s');
                if ($usua == $_SESSION["user"] && $senh == $_SESSION["pass"])
                {
                    echo "<p>Usuário logado com sucesso em $data às $hora.</p>";
                }
                else 
                {
                    echo "<p>Usuário não encontrado!</p>";
                }
            }
        ?>
        <br>
        <a href="javascript:history.go(-1)">&lArr; Voltar</a>
    </main>
</body>

</html>