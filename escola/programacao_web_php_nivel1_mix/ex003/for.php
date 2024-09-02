<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For e Foreach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>For e Foreach</h1>
    </header>

    <main>
        <p>
            <?php
                if (isset($_POST["ini"])&& isset($_POST["fim"])) {
                    $ini = $_POST["ini"] ?? 0;
                    $fim = $_POST["fim"] ?? 0;
                    if ($fim - $ini <= 100) {
                        $j = 0;
                        $valores = [];
                        for ($i = $ini; $i <= $fim; $i++) {
                            $valores[$j] = $i;
                            $j++;
                        }
                        foreach ($valores as $valor) {
                            echo $valor. " ";
                        }
                    } else {
                        echo "
                            <script>
                                alert('O intervalo deve ser de no máximo 100 números!');
                                history.go(-1);
                            </script>";
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