<?php 
    $usuario = [
        "idUsuario" => [
            "primeiroUsuario",
            "segundoUsuario",
            "terceiroUsuario"
        ],
        "Nome" => [
            "Wilson",
            "Guilherme",
            "Natasha"
        ],
        "Telefone" => [
            "wilson@hotmail.com",
            "guilherme@hotmail.com",
            "natasha@hotmail.com"
        ],
        "Email" => [
            "998892196",
            "997242535",
            "993815898"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informações</h1>
    </header>

    <main>
        <table>
            <tr>
                <?php 
                    foreach ($usuario as $chave => $valores) { 
                ?>
                <td><?= "<ins>". $chave. "</ins>" ?></td>
                <?php 
                    } 
                ?>
            </tr>
                <?php 
                    for ($i = 0; $i < 3; $i++) { 
                ?>
            <tr>
                <?php 
                    foreach ($usuario as $chave => $valores) { 
                ?>
                <td><?= $valores[$i] ?></td>
                <?php 
                    } 
                ?>
            </tr>
                <?php 
                    }
                ?>
        </table>
    </main>
</body>
</html>