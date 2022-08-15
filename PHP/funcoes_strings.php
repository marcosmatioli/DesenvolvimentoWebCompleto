<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    $texto = 'curso completo de php';
    $texto1 = 'CURSO COMPLETO DE PHP';

    //string to lower
    echo $texto1. '<br />';
    echo strtolower($texto1);
    echo '<hr/>';

    //string to upper
    echo $texto. '<br />';
    echo strtoupper($texto);
    echo '<hr/>';

    //upper case first por isso o up primeiro
    echo $texto. '<br />';
    echo ucfirst($texto);
    echo '<hr/>';

    //string lenght
    echo $texto. '<br />';
    echo strlen($texto);
    echo '<hr/>';
    
    //string replace
    echo $texto. '<br />';
    echo str_replace('php', 'JavaScript', $texto); // é case-sensitive
    echo ('<br/>');
    echo str_replace('xingamentos','Uii','todos os xingamentos nesse texto vão virar outra coisa, não podera ter xingamentos aqui!');
    echo ('<br/>');
    $teste = 200.9876;
    echo str_replace('.',',',$teste); /**não entendi o que aconteceu aqui mas numeros é numeros e não string entaõ o valor virou outro valor */
    echo $teste;
    echo '<hr/>';
    
    //string 
    echo $texto. '<br />';
    //'Curso Completo de PHP'
    //0,1,2,3,4,5 ... 20
    echo substr($texto,0,14) . '...';/**essa função nativa aqui de string basicamente ela pode ser usada com o string lenght e pegar uma parte da string */
    /**e ainda tem essa parada aqui /\ que vc pode concatenar e fazer não ter quebra de linha na pagina dizendo que tem mais conteudo para vc fazer */
    echo '<hr/>';



    ?>
</body>

</html>