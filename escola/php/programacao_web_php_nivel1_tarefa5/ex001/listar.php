<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>

<body>
    <header>
        <h1>Listagem de alunos</h1>
    </header>

    <main>
        <?php
        $nomes = $_SESSION["nomes"];
        $idades = $_SESSION["idades"];
        ?>

        <table border="2">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th colspan="2">Ação</th>
            </thead>
            <?php
            if (empty($nomes)) {
                echo "
                    <tr>
                        <td colspan='4'>Nenhum aluno cadastrado!</td>
                    </tr>
                ";
            } else {
                foreach ($nomes as $keynomes => $nome) {
                    echo "
                            <tr>
                                <td>$keynomes</td>
                                <td>$nome</td>
                                <td>$idades[$keynomes]</td>
                                <td><button onclick='location.href=\"editar.php?id=$keynomes\"'>Editar</button></td>
                                <td><button onclick='location.href=\"excluir.php?id=$keynomes\"'>Excluir</button></td>
                            </tr>
                        ";
                }
            }
            ?>
        </table>
    </main>

    <footer>
        <button onclick="location.href='index.php'">&#x1F3E0; Início</button>
        <button onclick="location.href='cadastrar.php'">&plusb; Cadastrar</button>
    </footer>

</body>

</html>