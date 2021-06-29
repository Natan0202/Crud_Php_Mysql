# Crud_Php_Mysql
Painel de login com CRUD - (Create - Rename - Update - Delete)
------- Instruções na criação do Forms --------

1º Conexão com o banco via mysqli_connect - conectando.php
{

    session_start(); //Abre a sessão para ser usado em outras páginas 
    //Se usa o comando para executar quando for necessário

    //Definição de host, root, db e senha
    define('HOST', '127.0.0.0');
    define('USER' , 'root');
    define('DB' , 'teste');
    define('SENHA', 'senha');

    //TEM ORDEM  - HOST, USER, SENHA, DB
    $conne = mysqli_connect(HOST, USER, SENHA, DB)


}

2º Criar a página de index, dar 'names' aos inputs no qual é desejável o dado - index.php

3º Verificação com o banco - verificar.php
{

    1º Abra a sessão - inclua páginas necessárias
    
    2º Verificação de caso o campo está vazio
    empty - header (Direcionamento) - $_POST

    3º - Capturar e declarar uma variável 
    que irá receber o valor capturado
    dos inputs da página desejada(index.php)

    4º Criar um camando($sql), nesse caso
    select - para selecionar e verificar
    os valores dos inputs capturados

    5º - Utilizando o mysqli_query - 
    pegamos a variável de conexão ao banco
    via sessão e a variável do comando em sql
    para executar a conexão e a Verificação 
    com o banco ($conne, $sql)

    6º Utilizando mysqli_num_rows 
    pegamos a variável na qual está executando
    a conexão e o comando e colocamos 
    na variável $row

    7º Verificação do resultado do $row -
    É feito um if para se achar o valor
    do $row - caso 1 entra no if e redireciona
    o usuário para a página painel.php
    E cria uma session user para mais tarde
    ser utilizada como meios no qual
    possa impedir o acesso indevido a url,
    caso ele "saia" do painel.
    E ao dar negativo deixa o usuário na página
    index
}

4º Verificação de user - verificar_user.php
{

    1º abrimos uma sessão 
    
    2º pegamos a session de user criada em verificar.php, caso
    não exista não permite que qualquer pessoa navegue pela url
}

5º Saida de user - logout
{ 

    1º Criamos um <a></a> na página no qual o USER
    tem acesso após passar pelas verificações

    2º Ao clicar nesse 'a' é acionando em logut.php e encerra a sessão
}

-------- Exebição de Nome e Id ---------

Ação que acontece após a entrada do usuário ao painel.php

1º Na aba painel.php 
{

    1º Com require_once chamamos a aba alterar.php
    para podermos fazer as ações necessárias

    2º Criamos uma tabela para estar exebindo os 
    valores no banco

    3º Abrimos uma tag php - incluimos "conectando.php"
    fizemos o comando select

    4º Executamos o comando e a conexão com o banco
    (query)

    5º A seguir, fizemos um while que roda todos os dados
    que estiverem no banco, ao terminar a leitura
    ele para - pegamos o valor de $exe colocamos em $row
    e fazemos um fetch_assoc() para verificar no banco

    6º Após isso fechamos o php para acrescentar 
    tags HTML.
    Dento das <td></td> colocamos tags php para mostrar
    o id e nome na tabela criada
    E ao lado de cada linha é criada um <a></a>, com
    a opção excluir ou alterar


    Obs: Poderia se usar com echo e acrescentar valores
    HTML - porém, é mais fácil usar tags HTML fora do php
    para manipular a estilização.

    7º No href - colocamos a referência das páginasd
    de excluir e painel - Após eles o nomes 
    delete e alterar - que passam o id no qual foi clicado
    
}

-------- Alteração de Nome e senha ---------

1º Todo o processo que irá ocorrer será dentro de 
painel.php e alterar.php
{

    1º Com a criação das tags <a></a> capturamos o id
    e mandamos para a aba PHP criada

    2º Logo abaixo existe um FORM que será essencial 
    para Alteração

    3º Ao clicar em alterar os dados que estão na tabela
    irão para os inputs do Forms, exceto id

    4º Acrescentamos value = <?php echo $senha;?>
    para que ao ser chamada pelo <a>Alterar</a>
    colocar os valores do banco nos inputs

    --Na parte do alterar.php--

    5º Ao ser chamados pelo alterar, entramos na primeira
    estrutura de decisão - onde verifica se alterar
    lá na tabela foi "setada"(isset) - através do GET capturamos o 
    id - executamos o comando SELECT que exibe
    no forms os valores do ID chamado

    6º $row é resposável por carregar os dados pedidos
    e as variáveis estão recebendo
}

2º Confirmando Alteração
{

    1º Com os nomes já colocados nos inputs
    o usuário pode alterar o desejado

    2º Vamos focar no botão que está no forms, colocamos
    o 'name' dele como 'update', fazendo com que ao clicar
    ele entra na aba alterar.php, através do action

    3º Entramos novamente no alterar.php e somos direcionados
    ao segundo IF, que verifica através do Post se foi
    "setado" o update - no qual o nome está no botão

    4º O usuário pode alterar os campos e confirmar
    no butão, alteração é feita no banco que ao final
    atualiza a tabela em painel.php

}

----- Exclusão por ID -----

1º Execução acontecerá entre a aba painel.php e excluir.php
{

    1º Incluimos a página de conexão novamente
    Para usarmos na query ($conne)

    2º Na aba painel pegamos pela transferência de ID
    o que o usuário deseja excluir
    Sendo delete o nome passado pelo <a></a> clicado
}

