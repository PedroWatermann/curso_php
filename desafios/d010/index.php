<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $ano = date("Y");
    $nasc = $_GET["nasc"] ?? 2000;
    $hoje = $_GET["hoje"] ?? $ano;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?= $nasc ?>" max="<?= $ano ?>">

            <label for="hoje">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?= $ano ?></strong>)</label>
            <input type="number" name="hoje" id="hoje" value="<?= $hoje ?>" min="<?= $nasc ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>

        <?php
        $idade = $hoje - $nasc;
        ?>

        <p>Quem nasceu em <?= $nasc ?> <?php if ($hoje == $ano) {
                                            echo "tem";
                                        } else {
                                            echo "vai ter";
                                        } ?> <strong><?= $idade ?> anos</strong> em <?= $hoje ?>!</p>
    </section>
</body>

</html>