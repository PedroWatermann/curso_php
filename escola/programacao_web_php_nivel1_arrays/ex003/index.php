<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Categoria de Produtos</h1>
    </header>

    <main>
        
            <?php
                $padaria = ["Baguete", "Torta", "Bolo"];
                $hortifruti = ["Alface", "Rúcula", "Almeirão"];
                $limpeza = ["Desinfetante", "Água Sanitária", "Detergente"];

                echo "<h2>Padaria</h2>";
                foreach ($padaria as $produto) {
                    echo $produto. "<br>";
                }

                echo "<h2>Hortifruti</h2>";
                foreach ($hortifruti as $produto) {
                    echo $produto. "<br>";
                }

                echo "<h2>Limpeza</h2>";
                foreach ($limpeza as $produto) {
                    echo $produto. "<br>";
                }
            ?>
        
    </main>
</body>
</html>