<?php

	class Pessoa {

		public $nome = null;

		function __construct($nome) { /**esse metodo ele inicia assim que inicia o codigo */
			echo 'Objeto iniciado';
			$this->nome = $nome;
		}

		function __destruct() { /**esse metodo ele executa no final destruindo o objeto e terminando a aplicação */
			echo 'Objeto removido';
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		function correr() {
			return $this->__get('nome') . ' está correndo';
		}
	}

	$pessoa = new Pessoa('Jorge');
	echo '<br />Nome: ' . $pessoa->__get('nome');
	echo '<br />' . $pessoa->correr();
	echo '<br />' . $pessoa->correr();
	echo '<br />' . $pessoa->correr();
	echo '<br />' . $pessoa->correr();
	echo '<br/>';
	//unset($pessoa);
	
	//unset($pessoa); //proposital


?>