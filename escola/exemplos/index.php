<?php 
    session_start();

    $_SESSION["alunos"] = array (
        "primeiroAluno" => "Luanna",
        "segundoAluno" => "Maria",
        "terceiroAluno" => "Ana Luiza"
    );

    foreach ($_SESSION["alunos"] as $key => $aluno) {
        echo "<br>" .$aluno;
    }
?>
<br>
<a href="lista_alunos.php">Listar alunos</a>
<br>

<?php
    $_SESSION["aves"] = array (
        "primeiroAluno" => "Luanna",
        "segundoAluno" => "Maria",
        "terceiroAluno" => "Ana Luiza"
    );

    foreach ($_SESSION["aves"] as $key => $ave) {
        echo "<br>" .$ave;
    }
?>
<br>
<a href="lista_aves.php">Listar aves</a>