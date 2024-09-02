<?php
$mostrarBotao = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mostrarBotao = false;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Cadastro de Alunos</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <?php if ($mostrarBotao):?>
                <table>
                    <tr>
                        <td>Digite a quantidade de alunos</td>
                        <td><input type="number" name="qtde" id="qtde" max="10" min="1"></td>
                    </tr>
                </table>
            <?php endif;?>
            <?php if ($mostrarBotao): ?>
                <input type="submit" value="Gerar Campos" id="btn" name="btn">
            <?php endif; ?>
        </form>


        <?php
        $qtde = $_POST["qtde"] ?? 0;

        if (isset($_POST["btn"]) && $qtde != null) {
            echo "<form action='" . $_SERVER["PHP_SELF"] . "' method='post'";
            echo "<table align='center' class='tabelaDinamica'>";
            for ($i = 0; $i <= $qtde; $i++) {
                if ($i == 0) {
                    echo "
                                <tr>
                                    <td><ins>Alunos</ins></td>
                                </tr>
                            ";
                } else {
                    echo "
                                <tr>
                                    <td>Aluno $i</td>
                                    <td><input type='text' name='aluno$i' id='aluno$i'></td>
                                </tr>
                            ";
                }
            }
            echo "<input type='hidden' name='qtde' value='$qtde'>";
            echo "</table>";
            echo "<input type='submit' id='btn' name='btnCad' value='Cadastrar'>";
            echo "</form>";
            echo "
                <a href='javascript:history.go(-1)'>
                    <button id='btn'>&lArr; Voltar</button>
                </a>
            ";
        } else if (isset($_POST["btn"]) && $qtde == null) {
            echo "
                    <script>
                        alert('Digite a quantidade de alunos.');
                        history.go(-1);
                    </script>
                ";
        }

        if (isset($_POST["btnCad"])) {
            $listaAlunos = [];
            $qtde2 = $_POST["qtde"];

            // var_dump($qtde2);
            // exit();

            for ($j = 0; $j < $qtde2; $j++) {
                $alu = $_POST["aluno" . ($j + 1) . ""];
                $listaAlunos[] = $alu;

                // var_dump($listaAlunos);
            }

            // var_dump($listaAlunos);

            echo "<table align='center' class='tabelaDinamica'>";
            for ($i = 0; $i <= $qtde; $i++) {
                if ($i == 0) {
                    echo "
                                <tr>
                                    <td colspan='2'><ins>Alunos</ins></td>
                                </tr>
                            ";
                } else {
                    echo "
                                <tr>
                                    <td>Aluno $i</td>
                                    <td><input type='text' name='aluno$i' id='aluno$i' value='" . $listaAlunos[$i - 1] . "'></td>
                                </tr>
                            ";
                }
            }
            echo "</table>";
            echo "
                <a href='javascript:history.go(-1)'>
                    <button id='btn'>&lArr; Voltar</button>
                </a>
            ";
        }
        ?>
    </main>
</body>

</html>