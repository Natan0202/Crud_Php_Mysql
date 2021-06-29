<?php
    session_start();
    include("conectando.php");
    //include("verificar_user.php");

    if(empty($_POST['login']) || empty($_POST['senha'])){
        header("Location: cadastro.php");
    }

    $user = mysqli_real_escape_string($conne, $_POST['login']);
    $senha = mysqli_real_escape_string($conne, $_POST['senha']);

    $sql = "SELECT nome FROM cadastro WHERE nome = '{$user}' ";

    $executar = mysqli_query($conne, $sql);

    $resultado = mysqli_num_rows($executar);

    if($resultado == 1){
        $_SESSION['existe'] = $user;
        header("Location: cadastro.php");
    }
    elseif($user == "" || $user = null){
        header("Location: cadastro.php");

    }
    else{
        $comando = "INSERT INTO cadastro (nome, senha) VALUES ('{$user}', '{$senha}')";
        $exe = mysqli_query($conne, $comando);
        $_SESSION['criado'] = $user;
        header("Location: cadastro.php");
    }

    
?>