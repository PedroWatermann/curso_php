<?php
    session_start();

    foreach ($_SESSION["alunos"] as $key => $aluno) {
        echo "<br>".$aluno;
    }
?>

<br>
<a href="destruir_sessao.php?tipo=aluno">Logout</a>