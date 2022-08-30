<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
        function setTelefone($numTelefone){
            $this->telefone = $numTelefone;
        }
        function getNome() {
            return $this->nome;
        }
        function getTelefone(){
            return $this->telefone;
        }
        function getNumFilhos() {
            return $this->numFilhos;
        }

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
    $y->setNome('José');
    $y->setNumFilhos(2);
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s) ';
    echo '<br />';
    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s) ';
    echo '<hr/>';
    $x->setTelefone('11 95258-8855');
    echo 'Telefone: '. $x->getTelefone();
    
  
?>