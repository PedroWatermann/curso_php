<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Estados</h1>
    </header>

    <main>
        <?php 
        $estados = ['Acre','Alagoas','Amapá','Amazonas','Bahia','Ceará','Distrito Federal','Espírito Santo','Goiás','Maranhão','Minas Gerais','Mato Grosso do Sul','Mato Grosso','Pará','Paraíba','Paraná','Pernambuco','Piauí','Rio de Janeiro','Rio Grande do Norte','Rondônia','Roraima','Rio Grande do Sul','Santa Catarina','Sergipe','São Paulo','Tocantins'];
        $estado = ucfirst($_POST["estado"]);

        if (in_array($estado, $estados)) {
            $pos = array_search($estado, $estados);
            echo "<p>O estado $estado está na posição $pos do array.</p>";
        } else {
            echo "<p>Este estado não existe no Brasil.</p>";
        }
        ?>
        <a href="javascript:history.go(-1)">
            <button id="btn">&lArr; Voltar</button>
        </a>
    </main>
</body>
</html>