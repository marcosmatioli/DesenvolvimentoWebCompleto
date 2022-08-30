<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    
    <h3>Pós-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br/>";
    echo "O valor contido em a após o incremento é " . $a++ . "<br/>"; /**aqui ele incrementa depois de printar essa msg */
    echo "O valor atualizado é $a";

    ?>
    <h3>Pré-incremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a pré o incremento é " . ++$a . "<br/>"; /** aqui ele incrementa antes de printar essa msg ou seja na própria msg ele ja incrementa*/
    echo "O valor atualizado é $a";

    ?>
    <h3>Pós-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a após o decremento é " . $a-- . "<br/>"; /**o pós decremento vai tirar 1 do valor */
    echo "O valor atualizado é $a";

    ?>
    <h3>Pré-decremento</h3>
    <?php
    $a = 7;
    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a pré o decremento é " . --$a . "<br/>"; /** o pré ele é feito no momento da msg ou seja aqui ja ocorre o decremento */
    echo "O valor atualizado é $a";

    ?>
</body>

</html>