<?php
session_start();
if (!isset($_SESSION["nomes"])) {
    $_SESSION["nomes"];
}
if (!isset($_SESSION["idades"])) {
    $_SESSION["idades"];
}
if (!isset($_SESSION["ids"])) {
    $_SESSION["ids"] = 1;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <h1>Cadastro de alunos</h1>
    </header>

    <main>
        <h2>Selecione uma opção:</h2>
        <footer>
            <button onclick="location.href='cadastrar.php'">&plusb; Cadastrar</button>
            <button onclick="location.href='listar.php'">&equiv; Listar</button>
        </footer>
    </main>
</body>

</html>