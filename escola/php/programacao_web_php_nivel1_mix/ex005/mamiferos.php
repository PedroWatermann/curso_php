<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamíferos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Mamíferos</h1>
    </header>

    <main>
        <p>
            <?php
            $animais = ["boi", "porco", "baleia", "homem", "cachorro"];
            $animal = strtolower($_POST["animal"]);
            if (in_array($animal, $animais)) {
                echo "
                    <script>
                        alert('Este animal já existe na lista.');
                        history.go(-1);
                    </script>";
            } else {
                array_push($animais, $animal);
            
                foreach ($animais as $nome) {
                    echo ucfirst($nome). "<br>";
                }
            }
            ?>
        </p>

        <a href="javascript:history.go(-1)">
            <button id="btn">&lArr; Voltar</button>
        </a>
    </main>
</body>
</html>