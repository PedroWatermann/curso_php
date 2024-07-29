<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        
            <p>
                <?php
                    $numero = $_GET["numero"] ?? 0;
                    $sucessor = $numero + 1;
                    $antecessor = $numero - 1;
                
                    echo "O número escolhido foi <strong>$numero</strong>";
                    echo "<br>O seu <em>antecessor</em> é <strong>$antecessor</strong>";
                    echo "<br>O seu <em>sucessor</em> é <strong>$sucessor</strong>"
                ?>
            </p>

        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>

</html>