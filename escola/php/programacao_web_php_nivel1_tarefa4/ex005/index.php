<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Números 2</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <table>
                <tr>
                    <td>Digite números inteiros</td>
                    <td><input type="number" name="num1" id="num1" value="<?=$_POST["num1"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num2" id="num2" value="<?=$_POST["num2"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num3" id="num3" value="<?=$_POST["num3"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num4" id="num4" value="<?=$_POST["num4"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num5" id="num5" value="<?=$_POST["num5"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num6" id="num6" value="<?=$_POST["num6"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num7" id="num7" value="<?=$_POST["num7"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num8" id="num8" value="<?=$_POST["num8"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num9" id="num9" value="<?=$_POST["num9"] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="num10" id="num10" value="<?=$_POST["num10"] ?? ""?>"></td>
                </tr>
            </table>
            <input type="submit" name="Calcular" id="btn">
        </form>

        <?php
        if (isset($_POST["num1"])) {
            $numeros = [];
            $pares = [];
            $impares = [];

            for ($i = 1; $i <= 10; $i++) {
                $num = $_POST["num$i"];
                if (isset($num)) {
                    $numeros[] = $num;

                    if ($num % 2 == 0) {
                        $pares[] = $num;
                    } else {
                        $impares[] = $num;
                    }
                }
            }

            echo "<p>Há <em><strong>". count($pares)."</strong></em> números <em><strong>pares</strong></em> e <em><strong>". count($impares)."</strong></em> números <em><strong>ímpares</strong></em>.</p>";
        }
        ?>
    </main>
</body>

</html>