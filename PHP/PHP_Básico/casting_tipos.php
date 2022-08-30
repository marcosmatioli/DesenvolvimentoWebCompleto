<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //gettype() => retorna o tipo da variável
    $valor = 10;
    $valor50 = 20;
    echo $valor50 . ' valor 50 <br/>';
    $valor2 = (float) $valor50; //float, double ou real
    $valor3 = (string) $valor; 
    
//int ou integer para fazer o casting
    echo $valor. ' ' . gettype($valor);
    echo '<br />';
    echo $valor2. ' Float: ' .gettype($valor2);
    echo '<br />';
    echo $valor3. ' ' .gettype($valor3);
    
    //converter de string para int
    $valor4 = '22.12';
    $valor5 = (integer) $valor4;
    echo '<br />';
    echo $valor5. ' ' .gettype($valor5);
    echo '<br />';
    echo '<br />';
    if(gettype($valor) === gettype($valor50)){
        echo 'os dois são inteiros double';
    }else {
        echo 'não é um inteiro';
    };
    $coisa ->(1,2,3,4,5);
    echo '<br />';
    echo $coisa
    ?>
</body>
</html>