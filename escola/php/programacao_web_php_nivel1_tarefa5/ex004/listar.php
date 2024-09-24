<?php
session_start();
if (empty($_SESSION["produtos"]) || empty($_SESSION["precos"])) {
    echo "
        <script>
            alert('Nenhum produto cadastrado');
            history.go(-1);
        </script>
    ";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>

<body>
    <header>
        <h1>Listagem de produtos</h1>
    </header>

    <main>
        <table>
            <thead>
                <th>Produto</th>
                <th>Preço</th>
            </thead>
            <tbody>
                <?php
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                if (empty($_SESSION["produtos"])) {
                    echo "
                        <tr>
                            <td colspan='2'>Nenhum produto cadastrado!</td>
                        </tr>
                    ";
                } else {
                    foreach ($_SESSION["produtos"] as $key => $value) {
                        echo "
                            <tr>
                                <td>" . ucfirst($value) . "</td>
                                <td>" . numfmt_format_currency($padrao, $_SESSION["precos"][$key], "BRL") . "</td>
                            </tr>
                        ";
                    }
                }

                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <button onclick="location.href='index.php'">&lArr; Voltar</button>
    </footer>
</body>

</html>