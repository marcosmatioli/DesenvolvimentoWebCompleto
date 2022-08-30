<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    
    //string '' ou ""
    $nome = 'Jorge Sant Ana';
    
    //int
    $idade = 29;

    //float
    $peso = 82.5;

    //boolean
    $fumante_sn = true; //true = 1 ou false = vazio

    // ... lógica ... //
    
    $idade = '30'; //php tem TIPAGEM FRACA ou seja vc consegue meter o que quiser quando quiser quanto ao tipo e o valor

    ?>

    <h1>Ficha cadastral</h1>
    <br/>
    <p> Nome: <?= $nome ?> </p>
    <p> Idade: <?= $idade ?> </p>
    <p> Peso: <?= $peso ?> </p>
    <p> Fumante: <?= $fumante_sn ?> </p>
    
</body>

</html>