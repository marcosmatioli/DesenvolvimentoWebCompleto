<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

        //== -> 2==2
        //=== -> são iguais e do mesmo tipo?
        //!= ou <> -> 'x' != 'y' ou 5 <> 6 (5 é diferente de 6?)
        //!== -> são diferentes e de tipos diferentes?
        // < -> 2 < 18  2 é menor que 18?
        if(2 === '2'){ #do mesmo valor mas tipos diferentes
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/>';
        if(2 === 2){ # do mesmo tipo e do mesmo valor
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        
        echo '<br/>';

        if(2 == '2'){
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        echo '<br/>';

        if(3 == '2'){
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<br/>';

        if(5 !== 6){ #eles são diferentes e não identicos
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        echo '<br/>';
        if(5 === 5) echo ('Verdadeiro');  #um instrução é valido somente uma da pra não usar chaves
        echo '<br/>'; 
        if(5 !== 5) 
        echo ('Verdadeiro<br/>'); # não imprimiu isso daqui na tela
        echo ('Segundo Verdadeiro<br/>');
        echo ('Terceiro Verdadeiro<br/>');


    ?>



</body>

</html>