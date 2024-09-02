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
                if ($usua == $_SESSION["user"] && $senh == $_SESSION["pass"])
                {
                    echo "<p>Usuário logado com sucesso!</p>";
                }
                else 
                {
                    echo "<p>Usuário não cadastrado.</p>";
                    echo "
                        <script>
                            history.go(index.php);
                        </script>";
                }
            }
        ?>
    </main>
</body>

</html>