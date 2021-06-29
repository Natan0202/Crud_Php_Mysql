<?php
//destruindo sessão ao sair
    session_start();
    session_destroy();
    header("Location: index.php");
?>