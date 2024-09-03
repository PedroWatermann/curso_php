<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatorizador</title>
</head>

<body>
    <h1>Resultado da aleatorização</h1>
    <?php
    $num = $_SESSION["numeros"];

    // Apenas por precaução
    session_destroy();
    ?>
    <p>
        <?php 
        echo "Os números sorteados foram: ";
        $count = 0;
        foreach ($num as $numero) {
            if ($count == count($num) - 1) 
            {
                echo "$numero.";
            }
            else 
            {
                echo "$numero, ";
            }
            $count++;
        }
        ?>
    </p>

    <!-- Com o link abaixo, session_destroy() não é necessária -->
    <a href="index.php"><button>&#x1F3E0; Voltar ao início</button></a>
</body>

</html>