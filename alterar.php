<?php
    //session_start();
   
    $mysqli = new mysqli('localhost', 'root', '123456', 'teste') or die(mysqli_error($mysqli));
    $nome = '';
    $senha = '';
    if(isset($_GET['alterar'])){
        $id = $_GET['alterar'];
        $update = true;
        $sql =  $mysqli->query("SELECT * FROM cadastro WHERE id = $id") or die($mysqli->error());    
        if($sql){
            $row = $sql->fetch_array();
            $nome = $row['nome'];
            $senha = $row['senha'];
        }
    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['login'];
        $senha = $_POST['senha'];
        $mysqli->query("UPDATE cadastro SET nome = '$nome', senha = '$senha' WHERE id = $id") or die ($mysqli->error);
        header("Location: painel.php");
    }

?>