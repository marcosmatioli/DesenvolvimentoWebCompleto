<?php
session_start();
print_r($_SESSION);
//remover indices do array de sessão
//unset($_SESSION[VALOR]) remove tudo da array se existir o valor

//destruir a variavel de sessão
//session_destroy(); ele acaba com todos os dados de sessões

session_destroy();
header('Location: index.php');
?>