<?php
session_start();
if (empty($_SESSION["grupos"])) {
    echo "
        <script>
            alert('Cadastre um grupo primeiro!');
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
    <title>Listar Espécies</title>
</head>

<body>
    <header>
        <h1>Listagem de espécies</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="grupo">Selecione um grupo para filtrar:</label>
            <select name="grupo" id="grupo">
                <option value="nope">Sem filtro</option>
                <?php
                foreach ($_SESSION["grupos"] as $key => $value) {
                    if (is_array($value)) {
                        echo "<option value=\"$key\">" . ucfirst($key) . "</option>";
                    }
                }
                ?>
            </select>

            <input type="submit" value="&#128269; Pesquisar" name="submit">
        </form>

        <?php 
        if (isset($_POST["submit"])) {
            echo "<ul>";
            $grupo = $_POST["grupo"];

            if ($grupo == 'nope') {
                echo "<h2>Espécies:</h2>";
                foreach ($_SESSION["grupos"] as $key => $value) {
                    if (is_array($value)) {
                        if (empty($value)) {
                            echo "<li>". ucfirst($key) ." => Nenhuma espécie cadastrada!</li>";
                        } else {
                            foreach ($value as $especie) {
                                // echo "<li>$especie</li>";
                                echo "<li>". ucfirst($key) ." => ". ucfirst($especie) ."</li>";
                            }
                        }
                    }
                }
            } else {
                echo "<h2>" . ucfirst($grupo) . "</h2>";
                if (isset($_SESSION["grupos"][$grupo]) && is_array($_SESSION["grupos"][$grupo])) {
                    if (empty($_SESSION["grupos"][$grupo])) {
                        echo "<li>Nenhuma espécie cadastrada!</li>";
                    } else {
                        foreach ($_SESSION["grupos"][$grupo] as $especie) {
                            echo "<li>". ucfirst($especie) ."</li>";
                        }
                    }
                }
            }

            echo "</ul>";
        }
        ?>
    </main>

    <footer>
        <button onclick="location.href='index.php'">&#8962; Início</button>
        <button onclick="location.href='cadEspe.php'">&plusb; Cadastrar Espécies</button>
    </footer>
</body>

</html>
