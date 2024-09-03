<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Animais</h1>
    </header>

    <main>
        <table>
            <?php
                $animais = [
                    "Mamíferos" => [
                                1 => "Boi", 
                                2 => "Porco", 
                                3 => "Baleia", 
                                4 => "Homem", 
                                5 => "Cachorro"
                    ],
                    "Répteis"   => [
                                1 => "Cobra", 
                                2 => "Jabuti", 
                                3 => "Cágado", 
                                4 => "Serpente", 
                                5 => "Tartaruga"
                    ],
                    "Aves"      => [
                                1 => "Arara", 
                                2 => "Águia", 
                                3 => "Gavião", 
                                4 => "Calopsita", 
                                5 => "Bem-Te-Vi"
                    ],
                    "Anfíbios"  => [
                                1 => "Rã", 
                                2 => "Sapo", 
                                3 => "Perereca", 
                                4 => "Cobra-Cega", 
                                5 => "Salamandra"
                    ],
                    "Peixes"    => [
                                1 => "Arraia", 
                                2 => "Pintado", 
                                3 => "Tubarão", 
                                4 => "Lambari", 
                                5 => "Tucunaré"
                    ]
                ];
                

                foreach ($animais as $i => $animal) {
                    echo "
                        <tr>
                            <td>Classe:</td>
                            <td>$i</td>
                        </tr>
                    ";
                    foreach ($animal as $nome) {
                        echo "
                            <tr>
                                <td colspan='2'>$nome<td>
                            </tr>
                        ";
                    }
                }
            ?>
        </table>
    </main>
</body>
</html>