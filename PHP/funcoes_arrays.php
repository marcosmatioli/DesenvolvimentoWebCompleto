<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //is_array -> verifica se o parâmetro passado é um array(true/false)
      $array1 = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');
    $retorno = is_array($array1);

    if($retorno){
        echo 'Sim, é um array';
    } else {
        echo 'Não, é um array';
    } 
    echo '<br/>';
    echo 'is_array teste / basicamente acima é uma função nativa de arrays que verifica se o parametro passado é ou não uma array';
    echo '<hr/>';
    //-------------------------------------------------------------------------------------------------
    //array_keys -> retorna todas as chaves de um array, armazenando em um novo array
      $array2 = [1 => 'a', 2 => 'b', 18 => 'c'];
    
    echo '<pre>';
        print_r($array2);
    echo '</pre>';
    
    $chaves_array = array_keys($array2);
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>'; 
    echo 'array_keys teste / ele retorna os indices da array, então serve para vc saber se tem indice faltando e saber todos os indices da array';
    echo '<hr/>';
    //-------------------------------------------------------------------------------------------------
    //sort -> ela ordena o nosso array e reajusta o indice
     $array3 = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array3);
    echo '</pre>';

    sort($array3); //true ou false

    echo '<pre>';
        print_r($array3);
    echo '</pre>'; 
    echo 'sort teste / ele ordena a array mas muda o indice conforme a nova ordem ou seja ele muda o indice dos valores da array';
    echo '<hr/>';
    //-------------------------------------------------------------------------------------------------
    //asort -> função análoga a sort, ordena um array preservando os indices
     $array4 = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array4);
    echo '</pre>';

    asort($array4); //true ou false

    echo '<pre>';
        print_r($array4);
    echo '</pre>'; 
    echo 'asort teste / ele ordena a array porem ele mantem os indices anteriores da array e não da valores novos de indice';
    echo '<hr/>';
    //-------------------------------------------------------------------------------------------------
    //count -> retorna um inteiro com a quantidade de elementos
      $array5 = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array5);
        echo 'Quantidade de elementos dentro da array(basicamente os indices): '.count($array5);
    echo '</pre>'; 
    echo 'count teste / basicamente ele conta a quantidade de elementos dentro da array. ';
    echo '<hr/>';
    //-------------------------------------------------------------------------------------------------
    //merge -> ela permite fundir vários arrays em um só
    $array9 = ['osx', 'windows'];
    $array8 = array('linux');
    $array7 = ['solaris'];

    $novo_array = array_merge($array7, $array8, $array9);/**aqui ele coloca a array 7 primeiro dps a 8 e em seguida a 9 */
    echo '<pre>';
    print_r($novo_array);
    echo '</pre>'; 
    echo 'array_merge teste / ele unifica as arrays em uma NOVA ARRAY, a ordem dentro da array_merge importa, pq é uma sequencia ';
    echo '<hr/>';
    //-------------------------------------------------------------------------------------------------
    //explode -> Divide uma string baseada em um delimitador
    $string = '26/04/2018';
    $string2 = 'Aprendendo mais ainda sobre php para entender como funciona essa para de explode ai.';
    $array_retorno2 = explode(' ',$string2);
    $array_retorno = explode('/', $string);
    echo '<pre>';
        echo $string;
        print_r($array_retorno);
        echo 'Data no modelo americano: '.$array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
    echo '</pre>';
    echo '<br/>';
    echo '<br/>';
    echo '<pre>';
        echo $string2;
        print_r($array_retorno2);
    echo '</pre>';
    echo '<br/>';
    echo '<br/>';
    echo 'explode teste / é a desestruturação de string, então a gente coloca o demilitador e coloca para que cada vez que encontrar uma barra crie um novo indice com aquele simbolo';
    echo '<hr/>';
    //-------------------------------------------------------------------------------------------------
    //implode -> junta os elementos de um array em uma string
    $array = ['a','b','x','y'];
    $string_retorno5 = implode('-', $array);
    echo $string_retorno5;
    $string_retorno3 = implode('-',$array_retorno2);
    echo '<br/>';
    echo '<br/>';
    echo 'Juntando a array que eu separei no explode agora com o comendo implode, utilziando um tracinho.<br/>'.$string_retorno3;
    echo '<br/>';
    echo 'implode teste / ele pega uma array e junta em uma string';
    echo '<hr/>';
    ?>


</body>

</html>