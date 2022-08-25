<?php 
session_start();
    echo '<pre>';
    print_r($_POST);
    echo '<pre/>';

    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo .'#'. $categoria . '#' . $descricao . PHP_EOL; // PHP_EOL = php end of line ele pula uma linha no final da escrita

    //criando, abrindo e escrevendo no arquivo txt
    $arquivo = fopen('arquivo.txt','a');
    fwrite($arquivo,$texto); //escreve no arquivo
    fclose($arquivo);
    header('Location: abrir_chamado.php');
?>