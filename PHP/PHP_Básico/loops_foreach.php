<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

    echo '<pre>';
    print_r($itens);
    echo '</pre>';
/**for each em php para percorrer uma coisa inteira dessa ai
 * $itens as $item , faz com que o elemento que vai ser percorrido entre na variavel $item e então a cada loop ele vai ser o $item ou seja,
 * a cada loop o $item vai receber o VALOR daquela array no caso o nome 'sofá','mesa','cadeira','fogão' etc...
 */
    foreach ($itens as $item) {
        echo "$item ";
        if ($item == 'mesa') {
            echo "(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)";
        }
        echo '<br />';
    };
    $controle2 = 0;
    $controle = true;
    foreach($itens as $array){
        
        if($controle){
            $controle2 +=1 ;
            echo 'Entrou aqui pela:'. $controle2-1 .'vez! '. '<br/>';
        }
        if($array == 'fogão'){ echo ''.strtoupper($array) .' encontrado na posição: '. $controle2-1 .'<br/>';}
        else echo '';
    };

    ?>
</body>

</html>