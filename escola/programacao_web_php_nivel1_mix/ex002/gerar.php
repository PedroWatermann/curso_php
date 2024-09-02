<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Inputs</h1>
    </header>

    <main>
        <table>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["qtde"]) && !empty($_POST["qtde"])) {
                    $qtde = $_POST["qtde"];
                    if ($qtde != 0 && $qtde > 0 && $qtde < 6) {
                        for ($i = 0; $i < $qtde; $i++) {
                            echo "
                                <tr>
                                    <td>Funcionário ". ($i + 1)."</td>
                                    <td><input type=\"text\" name=\"func$i\" id=\"func$i\"></td>
                                </tr>";
                        }
                    } else {
                        ?>
                            <script>
                                alert("Digite um número entre 1 e 5.")
                                history.go(-1);
                            </script>
                        <?php
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