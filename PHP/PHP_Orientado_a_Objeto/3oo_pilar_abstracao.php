<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


        //getters setters(overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo) {
            return $this->$atributo;
        }

        /* function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        } */

        //métodos
        function resumirCadFunc(){
            /* this, operador de ajuste de contexto */
            return "$this->nome possui $this->numFilhos filhos(s)";
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');/**basicamente a gente passa o valor agora junto com o valor e temos somente um medoto set e get */
    $y->__set('numFilhos', 2);
    // echo $y->resumirCadFunc();
    echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) ';
    echo '<br />';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);
    echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ';
    echo '<hr/>';
    $z = new Funcionario();
    $z->__set('nome','Marcos');
    $z->__set('telefone','11 98258-8552');
    $z->__set('numFilhos',2);
    $z->__set('cargo','Desenvolvedor ReactNativo');
    $z->__set('salario','R$3000.00');
    echo 'O usuário: ' . $z->__get('nome') . ', tem ' . $z->__get('numFilhos') .  ' filhos, o numero de telefone é: ' . $z->__get('telefone') . ', atualmente tem o cargo de: ' . $z->__get('cargo') . ', e o salário de:'. $z->__get('salario') . '.';