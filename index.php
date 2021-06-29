<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de login</title>
</head>
<body>
    <div class="container">
        <div class="form_login">

            <div class="login">
                <form method = "POST" action = "verificar.php">
                    <label for="" class="label__text">Acesso ao Painel</label>
                    <label for="">Login</label>
                    <input type="text" name="login" class="login_in">
                    <label for="">Senha</label>
                    <input type="text" name="senha" class="senha_in"><br>
                    <button class="button__lgn" type="submit" >Entrar</button>
                </form>
            </div>
            
        </div>
        <?php
            if(isset($_SESSION['nao_aut'])){ //verificando se for autenticado
                echo "ERRO AO LOGAR!";
            }
            unset($_SESSION['nao_aut']); //caso o user não logar ou digitar nada ela não mostra, ou se recarregar a página
        ?>
        <div class="div_novo">
            <a href = "cadastro.php" class="novo_cadastro">Novo Cadastro</a>
        </div>
    </div>
</body>
</html>