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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
            $valor = $_GET["valor"] ?? 0.0;
            $valor = (float)$valor;
            $nvalor = $valor / $cotacao;

            echo "Seus ". numfmt_format_currency($padrao, $valor, "BRL"). " equivalem a <strong> ". numfmt_format_currency($padrao, $nvalor, "USD"). "</strong>";
            echo "<br><p>*Cotação obtida diretamente pela API do site do <a href=\"https://www.bcb.gov.br/estabilidadefinanceira/fechamentodolar\" target=\"_blank\">Banco Central do Brasil</a></p>";
        ?>

        <button onclick="javascript:history.go(-1)"><strong>&xlarr;</strong> Voltar</button>
    </main>
</body>
</html>