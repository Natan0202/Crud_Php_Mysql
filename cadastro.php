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
                <form method = "POST" action = "novo.php">
                    <label for="" class="label__text">Cadastro ao painel</label>
                    <label for="">Nome para Loign</label>
                    <input type="text" name="login" class="login_in">
                    <label for="">Senha</label>
                    <input type="text" name="senha" class="senha_in"><br>
                    <button class="button__lgn" type="submit" >Entrar</button>
                </form>
            </div>
            
        </div>
        <?php
            if(isset($_SESSION['existe'])){
                echo "User já existente";
            }
            if(isset($_SESSION['criado'])){
                echo "Login criado com sucesso!";
            }
            
            unset($_SESSION['existe']);
            unset($_SESSION['criado']);
           
        ?>
        <div class="div_novo">
            <a href = "index.php" class="novo_cadastro">Login</a>
        </div>
    </div>
</body>
</html>