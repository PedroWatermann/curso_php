<?php
    session_start();

    foreach ($_SESSION["aves"] as $key => $ave) {
        echo "<br>".$ave;
    }
?>

<br>
<a href="destruir_sessao.php?tipo=ave">Logout</a>