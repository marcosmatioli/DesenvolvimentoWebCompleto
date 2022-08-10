<html>

<head>
	<meta charset="utf-8" />
	<title>Curso PHP</title>
</head>

<body>

	<?php
	$nome = 'Marcos';
	$cor = 'Vermelho';
	$sexo = 'Masculino';
	$amor_da_sua_vida = 'Rafaella <3';

	//operador . para concatenar
	define('BD_URL', 'endereco_bd_dev');
	define('BD_USUARIO', 'usuario_dev');
	define('BD_SENHA', 'senha_dev');
	$idade = 10;
	$idade2 = 20;
	define('x', $idade);
	define('y', $idade2);
	// .. lógica ..//

	echo BD_URL . '<br />';
	echo BD_USUARIO . '<br />';
	echo BD_SENHA . '<br />';
	echo ($idade = $idade + $idade2 + $idade) . ' imprimindo idade <br/>';
	echo x . ' imprimindo o x <br/>';
	echo y . ' imprimindo o y <br/>';
	echo 'O ' . $nome . ' gosta da cor: ' . $cor . ', ele é do sexo: ' .$sexo. ' e ele gosta dessa pessoa incrivel chamada: ' . $amor_da_sua_vida. ' <3 <br/>';
	echo "O $nome gosta da cor $cor e ele é do sexo $sexo e ele gosta dessa pessoa incrivel chamada: $amor_da_sua_vida <br/>";
	/** aspas duplas faz demorar um pouco mais no processo pq ele tem que ver se tem alguma variavel ali e as aspas simples é mais rapida pois ali ele j´[a sabe que é uma variavel*/
	echo 'O $nome gosta da cor $cor e ele é do sexo $sexo e ele gosta dessa pessoa incrivel chamada: $amor_da_sua_vida'
	/** */
	?>

</body>

</html>