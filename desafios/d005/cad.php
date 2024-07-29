<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analizador de Número Real</h1>

        <p>
            <?php 
                $num = $_GET["num"] ?? 0;
                $num = (float)$num;
                $inteiro = intdiv($num, 1);

                echo "Analizando o número <strong>$num</strong> informado pelo usuário:";
                echo "<br>
                      <ul>
                        <li> A parte inteira do número é <strong>$inteiro</strong>
                        <li> A parte fracionária do número é <strong>". number_format(($num - $inteiro), 3, ",", "."). "</strong>
                      </ul>";
            ?>
        </p>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>