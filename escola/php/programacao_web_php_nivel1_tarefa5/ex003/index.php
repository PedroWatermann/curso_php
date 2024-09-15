<?php 
session_start();
if (!isset($_SESSION["grupos"])) {
    $_SESSION["grupos"] = [];
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
        <h1>Início</h1>
    </header>

    <main>
        <button onclick="location.href='cadGrup.php'">&plusb; Cadastar Grupos</button>
        <button onclick="location.href='cadEspe.php'">&plusb; Cadastrar Espécies</button>
        <button onclick="location.href='lisGrup.php'">&equiv; Listar Grupos</button>
        <button onclick="location.href='lisEspe.php'">&equiv; Listar Espécies</button>
    </main>
</body>

</html>