<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = 'José';
        public $telefone = '11 99999-8888';
        public $numFilhos = 2;
        public $testeValor = 5;
        
        //métodos
        function resumirCadFunc(){
            /* this, operador de ajuste de contexto */
            return "$this->nome possui $this->numFilhos filhos(s)";
  
        }
        function modificarTelefone($num1){
            $this->telefone = $num1;
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
        function mostrarTelefone(){
           return "O telefone do funcionário é: $this->telefone";
        }
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc(); //para acessar atributos ou métodos, usamos o "->"
    echo '<br />';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo '<hr />';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br />';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();
    echo '<hr/>';
    echo $x->mostrarTelefone();
    echo '<hr/>';
    echo '<hr/>';
    $x->modificarTelefone('11 95159-9515');
    $y->modificarTelefone('31 35755-3575');
    echo $x->mostrarTelefone();
    echo '<hr/>';
    echo $y->mostrarTelefone();
    echo '<hr/>';
    echo "$y->testeValor";
    $x->testeValor = 100;
    echo '<br/>';
    echo "$x->testeValor";
?>