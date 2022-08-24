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
print_r($_SESSION);
echo '<hr/>';

 $usuario_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd')
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
    }
    
 }
if($usuario_autenticado){
    echo 'usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
}else{
    header('Location: index.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
};

?>