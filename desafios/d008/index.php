<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Informe um número</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?= $_GET["numero"] ?? 0 ?>" min="0">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>

        <?php
        $numero = $_GET["numero"] ?? 0;
        $quad = sqrt($numero);
        $cub = pow($numero, 1 / 3);
        ?>

        <p>
            Analisando o <strong>número <?=$numero?></strong>, temos:
        <ul>
            <li>A sua raíz quadrada é <strong><?= number_format($quad, 3, ",", ".") ?></strong></li>
            <li>A sua raíz cúbica é <strong><?= number_format($cub, 3, ",", ".") ?></strong></li>
        </ul>
        </p>
    </section>
</body>

</html>