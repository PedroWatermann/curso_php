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
    <title>Cadastrar Espécies</title>
</head>

<body>
    <header>
        <h1>Cadastro de espécies</h1>
    </header>

    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="grupo">Selecione um grupo para cadasrar:</label>
            <select name="grupo" id="grupo">
                <?php
                foreach ($_SESSION["grupos"] as $key => $value) {
                    if (is_array($value)) {
                        echo "<option value=\"$key\">" . ucfirst($key) . "</option>";
                    }
                }
                ?>
            </select>
            <label for="especie">Espécie:</label>
            <input type="text" name="especie" id="especie">

            <input type="submit" value="&plusb; Pesquisar" name="submit" id="submit" disabled="disabled">
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $grupo = $_POST["grupo"];
            $especie = strtolower($_POST["especie"]);
            $_SESSION["grupos"][$grupo][] = $especie;
            echo "
                <script>
                    alert('Espécie cadastrada com sucesso!');
                </script>
            ";
        }
        ?>
    </main>

    <footer>
        <button onclick="location.href='index.php'">&#8962; Início</button>
        <button onclick="location.href='lisEspe.php'">&equiv; Listar Espécies</button>
    </footer>

    <script>
        let especie = document.getElementById("especie");
        let submit = document.getElementById("submit");

        especie.addEventListener('input', () => {
            if (especie.value.trim() !== '') {
                submit.disabled = false;
            } else {
                submit.disabled = true;
            }
        });
    </script>
</body>

</html>