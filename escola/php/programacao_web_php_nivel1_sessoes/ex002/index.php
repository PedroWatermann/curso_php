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
    <h1>Primeira aleatorização concluída</h1>
    <?php
    $num = [];
    for ($i = 0; $i < 5; $i++) {
        $num[] = rand(1, 100);
    }
    $_SESSION["numeros"] = $num;
    ?>
    <a href="pg1.php"><button>Próximo &rArr;</button></a>
</body>

</html>