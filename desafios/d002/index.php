<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com Números Aleatórios</h1>

        <?php
            $min = 0;
            $max = 100;
            $numero = mt_rand($min, $max);
            
            echo "<p>Gerando um número aleatório entre $min e $max...<br>O número gerado foi <strong>$numero</strong></p>";
        ?>

        <button type="button" onclick="javascript:document.location.reload()">&#x1f504; Gerar Outro</button>
    </main>
</body>
</html>