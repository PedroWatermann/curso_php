<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Manipulação</h1>
    </header>

    <main>
        <?php
        $ini = $_POST["ini"] ?? 0;
        $fim = $_POST["fim"] ?? 0;
        if ($fim - $ini <= 10 && $fim - $ini >= 2) {
            $nums = [];
            $soma = 0;
            $mult = 1;
            $j = 0;
            for ($i = $ini; $i <= $fim; $i++) {
                $nums[$j] = $i;
                $soma += $i;
                $mult *= $i;
                $j++;
            }

            echo "
                <table>
                    <thead>
                        <th>Sequência</th>
                        <th>Soma</th>
                        <th>Multiplicação</th>
                    </thead>";

            foreach ($nums as $key => $num) {
                if ($key == 0) {
                    echo "
                    <tr>
                        <td>$num</td>
                        <td>$soma</td>
                        <td>$mult</td>
                    </tr>";
                } else {
                    echo "
                    <tr>
                        <td>$num</td>
                    </tr>";
                }
            }
            echo "</table>";
        } else {
            echo "
                <script>
                    alert('O intervalo não pode ser maior do que 10 e nem menor do que 2.');
                    history.go(-1);
                </script>";
        }
        ?>

        <a href="javascript:history.go(-1)">
            <button id="btn">&lArr; Voltar</button>
        </a>
    </main>
</body>

</html>