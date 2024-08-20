<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $valor2 = $_GET["valor2"] ?? 0;
        $peso2 = $_GET["peso2"] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="valor1">1º valor:</label>
            <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?? 0 ?>" required>

            <label for="peso1">1º peso:</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?? 1 ?>" min="1" required>

            <label for="valor2">2º valor:</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?? 0 ?>" required>

            <label for="peso2">2º peso:</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?? 1 ?>" min="1">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das médias</h2>

        <?php
        $simples = ($valor1 + $valor2) / 2;
        $ponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        ?>

        <p>
            Analisando os valores <?= $valor1 ?> e <?= $valor2 ?>, temos:
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($simples, 2, ",", ".") ?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso1 ?> e <?= $peso2 ?> entre os valores é igual a <?= number_format($ponderada, 2, ",", ".") ?>.</li>
        </ul>
        </p>
    </section>
</body>

</html>