<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crescimento Populacional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Crescimento Populacional</h1>
    </header>

    <main>
        <a href="#fim">
            <button id="btn">&dArr;</button>
        </a>

        <table>
            <tr>
                <td>Anos</td>
                <td>Pupulação China</td>
                <td>População Nigéria</td>
            </tr>

            <?php
                $china = 1393000000;
                $cresChina = 0.0037;
                $nigeria = 195900000;
                $cresNigeria = 0.038;
                $anos = 0;

                while ($nigeria < $china) {
                    $china += $cresChina * $china;
                    $nigeria += $cresNigeria * $nigeria;
                    $anos++;
                    
                    echo "
                        <tr>
                            <td>$anos</td>
                            <td>$china</td>
                            <td>$nigeria</td>
                        </tr>
                    ";
                }
            ?>
        </table>

        <?="<p id='fim'>Logo, serão necessários <em><strong>$anos</strong></em> anos para que a população da Nigéria ultrapasse a população da China.</p>"?>

        <a href="#top">
            <button id="btn">&uArr;</button>
        </a>
    </main>
</body>
</html>