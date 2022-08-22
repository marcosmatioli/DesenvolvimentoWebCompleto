<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Atividade 3</title>
</head>
<body>
    
    <?php 
    /**----------------------------------------------------------------- */
    /**
     * Crie um script capaz de produzir, atraves de um laço de repetição, uma array com 6 elementos
     * númericos aletórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena.
     * Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos.
     * 
     */
    /**
     * esse aqui abaixo cria uma array com 6 numeros e verifica se ele já existe na array se existir continue e decremento do i porque se não 
     * não teremos 6 números já que quando ele passa no if quer dizer que o numero se repetiu mas mesmo assim ele deu incremento no i fazendo ter 1 numero a menos
     */
    $numeros_mega = [];
     for($i =0;$i<6;$i++){
        $number = rand(1,60);
        if($existe = (in_array($number,$numeros_mega))){
            echo "Deu o valor: $existe / O número: $number";
            echo '<hr/>';
            $i-=1;
            continue;
        }
        $numeros_mega [] = $number;
     }
     echo 'Array Numeros Mega:';
     echo '<pre>';
     var_dump($numeros_mega);
     echo '<pre/>';
     echo '<hr/>';
     /**utilizando o while para preencher a array (lição do gabarito)*/

     $numeros_mega2 = array();

     while(count($numeros_mega2)<=5){
        $number1 = rand(1,60);
        if(!in_array($number1,$numeros_mega2)){
            $numeros_mega2[]=$number1;
        }
     }
     echo '2 - Array Numeros Mega:';
     echo '<pre>';
     var_dump($numeros_mega2);
     echo '<pre/>';
     echo '<hr/>';
     
     /** esse aqui abaixo é um for que preenche uma array com numeros aleatorios nas posições da array, gerando assim uma array com
      * 60 numeros aleatorios nas posições da array.
      * aqui também temos a verificação de todos os numeros, se for repetido printa na tela
      */
     $lista_mega = [];
     $numeros_repitidos = [];
     for($x = 0; $x < 60; $x++){
        $numero_lista = rand(1,60);
        if(in_array($numero_lista,$lista_mega)){
            $numeros_repitidos[] = $numero_lista;
            $x -= 1;
            continue;
        }
        $lista_mega[$x]= $numero_lista;
        
     }
     echo 'Lista 60 numeros aleatorios na array:';
     echo '<pre>';
     var_dump($lista_mega);
     echo '<pre/>';
     echo '<hr/>';
     $retorno = array_search(1 , $lista_mega);
     echo "o valor 1 está na posição: $retorno da array lista_mega.";
     /**tentei ordenar a array de numeros repitidos mas fiquei 2horas e não consegui outro dia eu tento
      * e quem imaginaria que eu iria tentar denovo em menos de 1hora apsoksapok
     */
    echo '<br/>';
    echo ' Se o retorno foi 1 então ele teve sucesso em ordenar a array: ' .sort($numeros_repitidos); /**como o retorno foi 1 */
    echo '<pre>';
     var_dump($numeros_repitidos);
     echo '<pre/>';

     
    ?>

</body>
</html>