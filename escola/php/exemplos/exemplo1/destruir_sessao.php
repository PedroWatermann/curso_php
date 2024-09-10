<?php 
    session_start();

    if (session_status() == PHP_SESSION_ACTIVE) {
        if (isset($_GET["tipo"])) 
        {
            if ($_GET["tipo"] == "ave") 
            {
                unset($_SESSION["aves"]);
            }

            if ($_GET["tipo"] == "aluno") 
            {
                unset($_SESSION["alunos"]);
            }
        } 
        
        echo "<p>Sessão destruída</p>";
    }