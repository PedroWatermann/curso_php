<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Music</h1>
    </header>

    <main>
        <?php 
            $estilo = $_POST["estilo"];
            for ($i = 0; $i < 5; $i++) {
                $artista[$i] = $_POST["artista". ($i + 1). ""];
            }
        ?>

        <table>
            <tr>
                <td><strong><em><ins>Estilo</ins></em></strong></td>
                <td><strong><em><ins>Artistas</ins><em></strong></td>
            </tr>
            <?php 
                for ($i = 0; $i < 5; $i++) {
                    if ($i == 0) {
                        echo "
                            <tr>
                                <td>$estilo</td>
                                <td>$artista[$i]</td>
                            </tr>
                        ";
                    } else {
                        echo "
                            <tr>
                                <td></td>
                                <td>$artista[$i]</td>
                            </tr>
                        ";
                    }
                }
            ?>
        </table>

        <a href="javascript:history.go(-1)">
            <button id="btn">&lArr; Voltar</button>
        </a>
    </main>
</body>
</html>