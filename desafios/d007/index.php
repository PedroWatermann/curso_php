<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);
    $min = 1_412.00;
    $salario = $_GET["salario"] ?? 1412.00;
    ?>

    <main>
        <h1>Informe seu salário</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $_GET["salario"] ?? "1412.00" ?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>

        <?php
        $qtde = intdiv($salario, 1412);
        $resto = $salario - 1412 * $qtde;
        ?>

        <p>Quem recebe um salário de <?= numfmt_format_currency($padrao, $salario, "BRL") ?> ganha <strong><?php if ($qtde == 1) {echo "$qtde salário mínimo";} else {echo "$qtde salários mínimos";} ?></strong> + <?= numfmt_format_currency($padrao, $resto, "BRL") ?>.</p>
    </section>
</body>

</html>