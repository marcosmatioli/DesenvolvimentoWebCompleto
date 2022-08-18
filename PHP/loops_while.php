<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $num = 1;
    //operadores comparação / lógicos
    echo '-- Início do loop --<br />';
    while ($num < 10) {

        $num++; //critério de parada.
        if ($num == 2 || $num == 6) {
            continue;/**ele volta para a
             parte de cima e não faz a impressão do valor */
        }
        echo "$num <br />";
    }
    echo '-- Fim do loop --';
    ?>


</body>

</html>