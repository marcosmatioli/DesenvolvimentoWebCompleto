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
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filhos(s)";
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('numFilhos', 2);
    echo $y->resumirCadFunc();
    // echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) ';
    echo '<br />';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);
    echo $x->resumirCadFunc();
    // echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ';
