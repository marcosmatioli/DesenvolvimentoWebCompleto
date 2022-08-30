<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
     $num = 7.5;
     $num1 = 1.4;
     echo ceil($num); //arredonda para cima
     echo '<br/>';
     echo floor($num); //arredonda para baixo
     echo '<br/>';
     echo round($num1); //arrendoda com base na fracao (.0 .4 -> para baixo) (.5 .9 -> para cima) arredonda com base na fração
     echo '<br/>';
     echo $numerorand = rand(1, 5);
     if($numerorand >= 2100000000)
     {
        echo '<br/>Quase perto do numero maximo <br/>';
     }; //gerar um falor aleatório (maior valor aleatório possível)
     echo '<br />' . getrandmax(); //descobre o valor maximo que pode ser aleatorio a depender do sistema operacional
    echo '<br/>';
    echo round(sqrt(155)); //raiz quadrada basta coloca ai e ele vai resolver.// combinando os as funções nativas para obter um resultado melhor
    
    ?>
</body>

</html>