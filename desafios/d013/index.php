<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
            display: inline-block;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <?php
    $valor = $_GET["valor"] ?? "0";
    $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>" step="5" min="0">

            <p style="font-size: 0.6em">*Notas disponíveis: R$ 100, R$ 50, R$ 10 e R$ 5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php
        $resto = $valor;
        $_100 = intdiv($resto, 100);
        $resto %= 100;
        $_50 = intdiv($resto, 50);
        $resto %= 50;
        $_10 = intdiv($resto, 10);
        $resto %= 10;
        $_5 = intdiv($resto, 5);
        $resto %= 5;
        ?>

        <h2>Saque de <?=numfmt_format_currency($padrao, $valor, "BRL")?> realizado</h2>
        <p>Você receberá as seguintes notas:</p>
        <ul>
            <li><img class="nota" src="imagens/100-reais.jpg" alt="100 reais"> <strong>x <?= $_100 ?></strong></li>
            <li><img class="nota" src="imagens/50-reais.jpg" alt="50 reais"> <strong>x <?= $_50 ?></strong></li>
            <li><img class="nota" src="imagens/10-reais.jpg" alt="10 reais"> <strong>x <?= $_10 ?></strong></li>
            <li><img class="nota" src="imagens/5-reais.jpg" alt="5 reais"> <strong>x <?= $_5 ?></strong></li>
        </ul>
    </section>
</body>

</html>