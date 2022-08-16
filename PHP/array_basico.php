<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //arrays sequenciais (numéricos)
    // $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
    /*
    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
    $lista_frutas[] = 'Abacaxi';
    
    
    //-----funções para debugar!-----
    echo '<pre>';
        var_dump($lista_frutas);
    echo '</pre>';
    
    echo '<hr />';
    echo '<pre>';
        print_r($lista_frutas);
    echo '</pre>';
    //-----funções para debugar!----- 
    
    
    echo $lista_frutas[4];
    */
    $valor = 'Nome Funcionario: ';
    $lista_func = array('Marcos','José','Rafaella','Frank','Aislan','Gusto',20,20.9,getrandmax());
    $lista_func[] = 'Paulo';
    echo '<pre>';
    var_dump($lista_func); /**um jeito de mostrar a array */
    echo '<pre/>';
    echo '<br/>';
    echo '<pre>';
    print_r($lista_func);
    var_dump($lista_func); /**outro jeito de mostrar a array */
    echo '<pre/>';
    /** var_dump / print_r */

/** 
 * 
 * //associativos
 *   $lista_frutas = [
  *      'a' => 'Banana',
   *     'b' => 'Maçã',
    *    'x' => 'Morango',
     *   'z' => 'Uva',
      *  '2' => 'Abacate'
*    ];
 *   $lista_frutas['w'] = 'Abacaxi';
  *  echo '<pre>';
   * var_dump($lista_frutas);
    *echo '</pre>';
    *echo $lista_frutas["x"];
 * 
 * 
*/
    
    ?>
</body>

</html>