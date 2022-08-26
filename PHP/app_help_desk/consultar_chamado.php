<?php
require_once('validador_acesso.php');
?>

<?php

$chamados = array();
//$arquivo = fopen('arquivo.txt','r');
$arquivo = fopen('../../app_help_desk/arquivo.txt','r');
//enquanto houve linhas/registro para serem recupoerados
/**feof() é uma função nativa do php que percorre o arquivo até encontrar o final do arquivo End of line 'EOL' 
 * então quando a gente entra no arquivo não é final do arquivo então ele retorna false, e se for false ele não vai entrar no while
 * então a gente nega o falso e vira verdade e ele entra no while, então quando for TRUE que chegou no final do arquivo ele vai negar essa verdade
 * e vai virar false pq a negação de true é false.
*/
while(!feof($arquivo)){
  $registro = fgets($arquivo); // pega a linha inteira até a quebra de linha
  $array_explode = explode('#',$registro);
  if($_SESSION['perfil_id'] == 2 ){
    if($_SESSION['id'] != $array_explode[0]){
      continue;
    }
  }
  if(count($array_explode) <3){
    continue;
  }
  $chamados[] = explode('#',$registro);
}
//fechar o arquivo aberto
fclose($arquivo);
  
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php foreach($chamados as $chamado){?>
                <?php
                //$chamado_dados = explode('#',$chamado);
                /*if($_SESSION['perfil_id'] == 2){
                  //e esse if serve para saber se o usuario é adm, caso ele não seja ja vai sair do if e mostrar todos os chamados
                  // agora se for um usuario ele vai pegar o di desse usuario e ver se tem chamado desse id
                  // então ele vai pegar e vai plotar os chamados do id em questão
                   
                  if($_SESSION['id'] != $chamado_dados[0]){
                    // esse if serve para fazer aparecer somente os chamados do usuario
                    continue;
                  }
                }*/
                //if(count($chamado_dados)<3){
                 // continue;
                //}
                ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamado[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamado[2]?></h6>
                  <p class="card-text"><?=$chamado[3]?></p>
                </div>
              </div>
                <? } //termino da chaves?>
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>