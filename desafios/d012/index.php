<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $tempo = $_GET["tempo"] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="tempo">Qual o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?= $tempo ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php
        $resto = $tempo;

        $sem = intdiv($resto, 604_800);
        $resto %= 604_800;

        $dia = intdiv($resto, 86_400);
        $resto %= 86_400;

        $hor = intdiv($resto, 3_600);
        $resto %= 3_600;

        $min = intdiv($resto, 60);
        $seg = $resto % 60;
        ?>

        <h2>Totalizando tudo</h2>

        <p>
            Analizando o valor que você digitou, <strong><?= $tempo ?> segundos</strong> equivalem a um total de:
        <ul>
            <li><?= $sem ?> semanas</li>
            <li><?= $dia ?> dias</li>
            <li><?= $hor ?> horas</li>
            <li><?= $min ?> minutos</li>
            <li><?= $seg ?> segundos</li>
        </ul>
        </p>
    </section>
</body>

</html>