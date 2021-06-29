<?php
    //abre sessão
    
    session_start();
    
    //verifica se a sessão existe, caso não, manda ele de volta para o index.php
    //quando tenta acessar pela url, um local indevido
    if(!$_SESSION['user']){
        header('Location: index.php');
    }
?>