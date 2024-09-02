<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Números</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <table>
                <tr>
                    <td>Digite números inteiros</td>
                    <td><input type="number" name="num1" id="num1" value="<?=$_POST['num1']  ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num2" id="num2" value="<?=$_POST['num2']  ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num3" id="num3" value="<?=$_POST['num3'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num4" id="num4" value="<?=$_POST['num4'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num5" id="num5" value="<?=$_POST['num5'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num6" id="num6" value="<?=$_POST['num6'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num7" id="num7" value="<?=$_POST['num7'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num8" id="num8" value="<?=$_POST['num8'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num9" id="num9" value="<?=$_POST['num9'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num10" id="num10" value="<?=$_POST['num10'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num11" id="num11" value="<?=$_POST['num11'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num12" id="num12" value="<?=$_POST['num12'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num13" id="num13" value="<?=$_POST['num13'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num14" id="num14" value="<?=$_POST['num14'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num15" id="num15" value="<?=$_POST['num15'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num16" id="num16" value="<?=$_POST['num16'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num17" id="num17" value="<?=$_POST['num17'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num18" id="num18" value="<?=$_POST['num18'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num19" id="num19" value="<?=$_POST['num19'] ?? ""?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="right"><input type="number" name="num20" id="num20" value="<?=$_POST['num20'] ?? ""?>"></td>
                </tr>
            </table>
            <input type="submit" value="Enviar" id="btn">
        </form>

        <?php
            if (isset($_POST["num1"])) {
                $numeros = [];
                $pares = [];
                $impares = [];

                for ($i = 1; $i <= 20; $i++) {
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

                echo "<p>Números: ";
                    foreach ($numeros as $key => $num) {
                        if ($key == count($numeros) - 1) {
                            echo "$num.";
                        } else {
                            echo "$num, ";
                        }
                    }
                echo "<br>";

                echo "Pares: ";
                    foreach ($pares as $key => $par) {
                        if ($key == count($pares) - 1) {
                            echo "$par.";
                        } else {
                            echo "$par, ";
                        }
                    }
                echo "<br>";

                echo "Ímpares: ";
                    foreach ($impares as $key => $impar) {
                        if ($key == count($impares) - 1) {
                            echo "$impar.";
                        } else {
                            echo "$impar, ";
                        }
                    }
                echo "</p><br>";
            }
        ?>
    </main>
</body>
</html>