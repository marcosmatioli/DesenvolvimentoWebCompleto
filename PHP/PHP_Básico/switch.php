<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $parametro = true;//true é true mas em php ele é 1
    switch ($parametro) {
        case 1://caindo nesse caso aqui antes de cair no caso 3
            echo 'Entrou no case 1';
            break;

        case 'abc':
            echo 'Entrou no case 2';
            break;

        case true:
            echo 'Entrou no case 3';
            break;

        default:
            echo 'Entrou no default';
            break;
    }//o true é 1 em PHP então se vc fizer uma comparação
    ?>

</body>

</html>