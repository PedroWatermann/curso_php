<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        img {
            max-width: 230px;
            max-height: 230px;
            object-fit: cover;
        }
        figcaption {
            padding: 10px;
            opacity: 0;
            transition: opacity 0.5s ease-out;
            font-family: cursive;
            font-size: large;
        }
        
        .wrapper {
            display: flex;
            width: 400px;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
        }
        .card1 {
            background-color: #87CEEB;
        }
        .card2 {
            background-color: #F2C464;
        }
        .card3 {
            background-color: #8BC34A;
        }
        .card {
            flex: 1;
            height: 100%;
            transition: flex 0.5s ease;
            cursor: pointer;

            display: flex;
            flex-direction: column;
            overflow: hidden;
            justify-content: center;
            align-items: center;
        }
        .card:hover {
            flex: 3;
        }
        .card:hover figcaption {
            opacity: 1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo novamente</h1>
    </header>
    <div class="wrapper">
        <div class="card card1">
            <img src="imagens/cidade.png" alt="Cidade">
            <figcaption>Cadastrar cidade</figcaption>
        </div>
        <div class="card card2">
            <img src="imagens/estado.png" alt="Estado">
            <figcaption>Cadastrar estado</figcaption>
        </div>
        <div class="card card3">
            <img src="imagens/pais.png" alt="País">
            <figcaption>Cadastrar país</figcaption>
        </div>
    </div>
</body>
</html>