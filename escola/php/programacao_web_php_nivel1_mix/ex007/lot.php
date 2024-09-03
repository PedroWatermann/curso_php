<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Loteria</h1>
    </header>

    <main>
        <!-- <pre> -->
            <?php
                $num1 = $_POST["num1"] ?? 0;
                $num2 = $_POST["num2"] ?? 0;
                $num3 = $_POST["num3"] ?? 0;
                $num4 = $_POST["num4"] ?? 0;
                $num5 = $_POST["num5"] ?? 0;
                for ($i = 0; $i < 10; $i++) {
                    $numero[$i] = rand(1, 100);
                }
                // var_dump($num);
            ?>
        <!-- </pre> -->

        <table>
            <thead>
                <th colspan="3" align="center">Números</th>
            </thead>
            <tr>
                <td>Sorteados</td>
                <td>Escolhidos</td>
                <td>Acertos</td>
            </tr>
            <tr>
                <td><?=$numero[0]?></td>
                <td><?=$num1?></td>
                <?php 
                    foreach ($numero as $num) {
                        if ($num1 == $num) {
                            echo "<td>Acertou!</td>";
                            $sim = true;
                            break;
                        }
                    }
                ?>
            </tr>
            <tr>
                <td><?=$numero[1]?></td>
                <td><?=$num2?></td>
                <?php 
                    foreach ($numero as $num) {
                        if ($num2 == $num) {
                            echo "<td>Acertou!</td>";
                            break;
                        }
                    }
                ?>
            </tr>
            <tr>
                <td><?=$numero[2]?></td>
                <td><?=$num3?></td>
                <?php 
                    foreach ($numero as $num) {
                        if ($num3 == $num) {
                            echo "<td>Acertou!</td>";
                            break;
                        }
                    }
                ?>
            </tr>
            <tr>
                <td><?=$numero[3]?></td>
                <td><?=$num4?></td>
                <?php 
                    foreach ($numero as $num) {
                        if ($num4 == $num) {
                            echo "<td>Acertou!</td>";
                            break;
                        }
                    }
                ?>
            </tr>
            <tr>
                <td><?=$numero[4]?></td>
                <td><?=$num5?></td>
                <?php 
                    foreach ($numero as $num) {
                        if ($num5 == $num) {
                            echo "<td>Acertou!</td>";
                            break;
                        }
                    }
                ?>
            </tr>
            <tr>
                <td><?=$numero[5]?></td>
            </tr>
            <tr>
                <td><?=$numero[6]?></td>
            </tr>
            <tr>
                <td><?=$numero[7]?></td>
            </tr>
            <tr>
                <td><?=$numero[8]?></td>
            </tr>
            <tr>
                <td><?=$numero[9]?></td>
            </tr>
        </table>
        <a href="javascript:history.go(-1)">
            <button id="btn">&lArr; Voltar</button>
        </a>
    </main>
</body>
</html>