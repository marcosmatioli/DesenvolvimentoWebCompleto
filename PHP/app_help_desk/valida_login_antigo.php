<?php
/**a super global get ja pega com base no name do formulario, mas ela deixa os dados aparecer na url o que deixa vuneravel esse tipo de dado então usamos o $_POST */

/**
 * print_r($_GET);
*
*echo '<br />';
*
*echo $_GET['email'];
*echo '<br />';
*echo $_GET['senha'];
*
*print_r($_POST);
*echo '<br/>';
*echo $_POST['email'];
*echo '<br />';
*echo $_POST['senha'];
*
*
 */
//echo '<pre>';
//print_r($usuario_app);
//echo '<pre/>';

 //relação de usuario do sistema
session_start();
$usuario_id = null;
$perfis = array(1 => 'Administrativo', 2 => 'Usuário');
$usuario_perfil_id = null;
 $usuario_app = array(
    array('id' => 1,'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1),
    array('id' => 2,'email' => 'user@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
    array('id' => 3,'email' => 'jose@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
    array('id' => 4,'email' => 'maria@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
 );
$usuario_autenticado = false;
 foreach($usuario_app as $user){

    //para ver se está chegando tudo certinho
    //echo 'Usuário app: '.$user['email'] . '/' . 'Senha app: '. $user['senha']. '.';
    //echo '<br/>';
    //echo 'Usuário Form: '.$_POST['email'] . '/' . 'Senha form: '. $_POST['senha']. '.';
    //echo '<hr/>';

    if($user['email'] == $_POST['email'] && $user['senha']==$_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
    
 }
if($usuario_autenticado){
    header('Location: home.php');
    //echo 'usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
}else{
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
};

?>