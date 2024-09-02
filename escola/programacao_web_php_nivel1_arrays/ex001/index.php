<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes de Vertebrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Classe de Vertebrados</h1>
    </header>

    <main>
        <?php 
            $vertebrados[0] = "Mamífero";
            $vertebrados[1] = "Répteis";
            $vertebrados[2] = "Aves";
            $vertebrados[3] = "Anfíbios";
            $vertebrados[4] = "Peixes";
        ?>

        <table>
            <?php 
                foreach ($vertebrados as $pos => $anim) {
                    echo "  <tr>
                                <td>
                                    $anim
                                </td>
                            </tr>";
                }
            ?>
        </table>
    </main>
</body>
</html>