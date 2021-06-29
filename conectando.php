<?php    
    include("verificar_user.php");

    define('HOST' , '127.0.0.1');
    define('USER' , 'root');
    define('SENHA' , '123456');
    define('DB' , 'teste');
    
    //TEM ORDEM  - HOST, USER, SENHA, DB
    $conne = mysqli_connect(HOST, USER, SENHA, DB) or die ("Falha na conexão");

?>