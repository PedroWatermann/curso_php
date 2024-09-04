<?php
session_start();

// $aves = $_SESSION["aves"];
// $anfibios = $_SESSION["anfibios"];
// $mamiferos = $_SESSION["mamiferos"];
// $repteis = $_SESSION["repteis"];
// $peixes = $_SESSION["peixes"];

if (isset($_SESSION["aves"])) {
    $aves = $_SESSION["aves"];
} 
if (isset($_SESSION["anfibios"])) {
    $anfibios = $_SESSION["anfibios"];
}
if (isset($_SESSION["mamiferos"])) {
    $mamiferos = $_SESSION["mamiferos"];
}
if (isset($_SESSION["repteis"])) {
    $repteis = $_SESSION["repteis"];
}
if (isset($_SESSION["peixes"])) {
    $peixes = $_SESSION["peixes"];
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
        <h1>Listagem dos animais</h1>
    </header>

    <main>
        <ul>
            <h2>Aves</h2>
            <?php
            if (isset($_SESSION["aves"])) {
                foreach ($aves as $key => $ave) {
                    echo "<li>" . ucfirst($ave) . "</li>";
                }
            } else {
                echo "<li>Nenhuma ave cadastrada.</li>";
            }
            ?>
        </ul>

        <ul>
            <h2>Anfíbios</h2>
            <?php
            if (isset($_SESSION["anfibios"])) {
                foreach ($anfibios as $key => $anfibio) {
                    echo "<li>" . ucfirst($anfibio) . "</li>";
                }
            } else {
                echo "<li>Nenhum anfíbio cadastrado.</li>";
            }
            ?>
        </ul>

        <ul>
            <h2>Mamíferos</h2>
            <?php
            if (isset($_SESSION["mamiferos"])) {
                foreach ($mamiferos as $key => $mamifero) {
                    echo "<li>" . ucfirst($mamifero) . "</li>";
                }
            } else {
                echo "<li>Nenhum mamífero cadastrado.</li>";
            }
            ?>
        </ul>

        <ul>
            <h2>Répteis</h2>
            <?php
            if (isset($_SESSION["repteis"])) {
                foreach ($repteis as $key => $reptil) {
                    echo "<li>" . ucfirst($reptil) . "</li>";
                }
            } else {
                echo "<li>Nenhum réptil cadastrado.</li>";
            }
            ?>
        </ul>

        <ul>
            <h2>Peixes</h2>
            <?php
            if (isset($_SESSION["peixes"])) {
                foreach ($peixes as $key => $peixe) {
                    echo "<li>" . ucfirst($peixe) . "</li>";
                }
            } else {
                echo "<li>Nenhum peixe cadastrado.</li>";
            }
            ?>
        </ul>
    </main>

    <footer>
        <a href="index.php"><button>&#x1F3E0; Início</button></a>
    </footer>
</body>

</html>