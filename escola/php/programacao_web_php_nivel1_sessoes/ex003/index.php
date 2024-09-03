<!--
    Reptil      => https://images.pexels.com/photos/14173715/pexels-photo-14173715.jpeg
    Mamífero    => https://images.pexels.com/photos/6109591/pexels-photo-6109591.jpeg
    Anfíbio     => https://images.pexels.com/photos/12569708/pexels-photo-12569708.jpeg
    Ave         => https://images.pexels.com/photos/27029446/pexels-photo-27029446/free-photo-of-natureza-passaro-ave-passarinho.jpeg
    Peixe       => https://images.pexels.com/photos/2156311/pexels-photo-2156311.jpeg?
-->

<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        img {
            width: 200px;
            height: 200px;
        }
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <h1>Animais vertebrados</h1>
    </header>

    <main>
        <a href="ave.php">
            <img src="imagens/ave.jpeg" alt="Ave">
            <figcaption>Aves</figcaption>
        </a>

        <a href="anfibio.php">
            <img src="imagens/anfibio.jpeg" alt="Anfíbio">
            <figcaption>Anfíbios</figcaption>
        </a>

        <a href="mamifero.php">
            <img src="imagens/mamifero.jpg" alt="Mamífero">
            <figcaption>Mamíferos</figcaption>
        </a>

        <a href="reptil.php">
            <img src="imagens/reptil.jpeg" alt="Réptil">
            <figcaption>Répteis</figcaption>
        </a>

        <a href="peixe.php">
            <img src="imagens/peixe.jpg" alt="Peixe">
            <figcaption>Peixes</figcaption>
        </a>

    </main>
</body>
</html>