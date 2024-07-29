<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
            const COTACAO = 5.62;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $valor = $_GET["valor"] ?? 0.0;
            $valor = (float)$valor;
            $nvalor = $valor / COTACAO;

            echo "Seus ". numfmt_format_currency($padrao, $valor, "BRL"). " equivalem a <strong> ". numfmt_format_currency($padrao, $nvalor, "USD"). "</strong>";
            echo "<br><p>*<strong>Cotação fixa de R$ ". COTACAO. "</strong> informada diretamente no código.</p>";
        ?>

        <a href="javascript:history.go(-1)"><button><strong>&xlarr;</strong> Voltar</button></a>
    </main>
</body>
</html>