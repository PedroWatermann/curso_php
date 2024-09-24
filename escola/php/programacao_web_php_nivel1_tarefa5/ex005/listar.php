<?php
session_start();
if (empty($_SESSION["cidades"])) {
    echo "
        <script>
            alert('Nenhuma cidade cadastrada');
            location.href='index.php';
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
        <h1>Listagem de cidades</h1>
    </header>

    <main>
        <table border="2">
            <thead>
                <th>Cidade</th>
                <th>População</th>
                <th>Classificação</th>
            </thead>
            <tbody>
                <?php
                    if (empty($_SESSION["cidades"])) {
                        echo "
                            <tr>
                                <td colspan='3'>Nenhuma cidade cadastrada!</td>
                            </tr>
                        ";
                    } else {
                        foreach ($_SESSION["cidades"] as $key => $value) {
                            echo "
                                <tr>
                                    <td>". ucfirst($value) ."</td>
                                    <td>". $_SESSION["populacoes"][$key] ."</td>
                                    <td>"; if ($_SESSION["populacoes"][$key] < 40000) {echo"Pequena";} else if ($_SESSION["populacoes"][$key] > 80000) {echo"Grande";} else {echo"Média";} echo"</td>
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