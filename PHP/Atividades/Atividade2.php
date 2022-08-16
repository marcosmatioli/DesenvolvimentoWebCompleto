<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Atividade 2</title>
</head>

<body>
    
    <?php 
    /**
     * 1) Crie uma function ao para calcular o imposto de renda a ser pago com base em um salario passado por parametro.
     * Para calcular o valor do imposto a ser pago, considere a seguinte tabela abaixo:
     *Ate 1.903,98 - isento
     *De R$ 1.903,99 ate R$ 2.826,65 - 7,5%
     *De R$ 2.826,66 ate R$ 3.751,05 - 15%
     *De R$ 3.751,06 ate 4.664,68 - 22,5%
     *Acima de R$ 4664,68 - 27,5%
     */
    $salario = 5000;

    function calculaImposto($salario){
        $salarioImposto = 0;

        if($salario <= 1903.98){
            $salario = 0;
         $salarioImposto = "Isento - O imposto a ser pago é: $salario ";
        }
        else if ($salario > 1903.99 && $salario <= 2826.65){
            $salario = ($salario*7.5) / 100;
         $salarioImposto = "7.5% - O imposto a ser pago é: $salario ";
        }
        else if ($salario > 2826.66 && $salario <= 3751.05){
            $salario = ($salario*15) / 100;
         $salarioImposto = "15% - O imposto a ser pago é: $salario ";
        } else if($salario > 3751.05 && $salario <= 4664.68){
            $salario = ($salario*22.5) / 100;
         $salarioImposto = "22.5% - O imposto a ser pago é: $salario ";
        } else {
            $salario = ($salario*27.5) / 100;
         $salarioImposto = "27.5% - O imposto a ser pago é: $salario ";
        }
        return $salarioImposto;
    }

    echo (calculaImposto($salario))

    ?>

</body>
</html>