<?php
    session_start();
    include("conectando.php");
    include("verificar_user.php");

    //fazendo um if se caso o campo login ou senha estiverem vazio - ele irá redirecionar
    if(empty($_POST['login'] || empty($_POST['senha']))){
        header("Location: index.php");
    }
    $usuario = mysqli_real_escape_string($conne, $_POST['login']); //pegando o valor digitado de login
    $senha = mysqli_real_escape_string($conne, $_POST['senha']);//pegando o valor digitado de senha
    //precisa pegar a váriavel de conexão e do input

    //comando
    $sql = "SELECT * FROM cadastro WHERE nome = '{$usuario}' and senha = '{$senha}'";

    //executando a query
    $result = mysqli_query($conne , $sql);

    //verificando se existe no banco
    $row = mysqli_num_rows($result);
    //condição de caso exista
    if($row == 1){
        //armazenando em uma sessão

        $_SESSION['user'] = $usuario;
        header("Location: painel.php");
    }
    else{
        $_SESSION['nao_aut'] = true;
        header("Location: index.php");

    }
?>