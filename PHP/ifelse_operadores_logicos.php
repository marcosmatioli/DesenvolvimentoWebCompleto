<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //operadores condicionais
    //== ->
    //=== 
    //!= ou <> 
    //!== 
    // <
    // >
    // <=
    // =>

    //&&
    //5 == 3 && 10 > 3 (cai no else)
    //3 == 3 && 10 > 3 (cai no if)
    
    //OR ou ||
    //5 == 3 || 10 > 3 (cai no if)
    //3 == 4 || 10 > 15 (cai no else)

    //XOR -> retorna true se uma das expressões for verdadeira e a outra for falsa
    // 4 == 4 XOR 10 > 15 (cai no if) - V F
    // 7 <= 4 XOR 10 > 15 (cai no else) - F F
    // 7 >= 4 XOR 10 < 15 (cai no else) - V V

    //! -> inverte o resultado retornado pela expressão
    //!('a' == 'b') - cai no if
    //!('a' == 'a') - cai no else

    //() estabelecer precedência
    //((22 == 22 && 3 == 3) || 5 != 5) - cai no if
    if(22 == 22 && 3 == 3 && 5 != 5) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }
    ?>


</body>

</html>