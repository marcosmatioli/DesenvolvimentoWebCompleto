<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<script>

    var x = 10
    var y = 10
    x += 5;
    document.write(`Valor de x:`+x+`<br/> Valor de y:`+y+`<br/>`)
</script>
<body>
    <?php
    // = atribuição do valor a direita no da esquerda
    // +, -, *, /, %

    $x = 10;
    $y = 5;
    //$x = $x + 5;
    //$x += 5 ;
    //$x -= $y;
    //$x /= $y;
    //$x *= $y;
    //$x %= $y;
    $x += 5;
    $y = 5 + 5;
    echo "<br/>Valor de x:$x<br/>Valor de y:$y";

    ?>
</body>

</html>