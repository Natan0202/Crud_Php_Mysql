<?php
    //session_start();
    include("verificar_user.php"); //puxando o verificador de sessão
    require_once 'alterar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mensagem{

            height: 100px;
            width: 100%;
            background-color: green;
        }
        h1{
            padding-top: 25px;
            text-align: center;
            color: white;
        }
        .sair{
            text-align: center;
            margin-top: 60px;
        }
        .sair a{
            text-decoration: none;
            font-size: 25px;
            color: black;
        }
        .sair a:hover{
            background-color: #03a9f4;
            padding: 10px 10px 10px 10px;
            border-radius: 5px;
            color: white;
        }
    </style>
</head>
<body>
    <div class = "container">
        <div class= "mensagem">
            <h1>Parabéns pelo acesso ao painel!!!!</h1>
        </div>
    </div>
    <table border = 2>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <?php
                include("conectando.php");
                $sql = "SELECT * FROM cadastro";

                $exe = $conne->query( $sql);
                
                while($row = $exe->fetch_assoc()):
            ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><a href="excluir.php?delete=<?php echo $row['id'];?>">Excluir</a></td>
                    <td><a href="painel.php?alterar=<?php echo $row['id'];?>">Alterar</a></td>
                </tr>
            <?php
                endwhile;
                    
                    
                
                /**$exe = $conne->query( $sql);
                if($exe->num_rows > 0){
                    while($row = $exe->fetch_assoc()){
                        echo '<tr>';
                        echo '<td>'. $row['id'] .'</td>';
                        echo '<td>'. $row['nome'] .'</td>';
                        echo '</tr>';
                    }
                }*/


                
            ?>
        </tr>
    </table>
    <div class="form_login">

            <div class="login">
                <form method = "POST" action = "alterar.php">
                    <input type="hidden" name= "id" value="<?php echo $id; ?>"><br>
                    <label for="" class="label__text">Cadastro ao painel</label><br>
                    <label for="">Nome para Loign</label>
                    <input value = "<?php echo $nome;?>" type="text" name="login" class="login_in"><br>
                    <label for="">Senha</label>
                    <input value = "<?php echo $senha;?>"type="text" name="senha" class="senha_in"><br>
                    <button class="button__lgn" type="submit" name = "update">Mudar</button>
                </form>
            </div>
            
        </div>
    <div class="sair">
        <a href="logout.php">SAIR</a>
    </div>
    
</body>
</html>