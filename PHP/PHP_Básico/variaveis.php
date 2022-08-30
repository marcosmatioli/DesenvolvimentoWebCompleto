<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
		<script>
			var x = 10
			var y = 10
			function somar(){
				return document.getElementById('btn').innerHTML = x+y
			}
		</script>
	</head>

	<body>

		<?php
	//então o que eu colocar na variavel ela vai ser do tipo
			//string
			$nome = 'Jorge Sant Ana';
			$nome = $nome . ' / ' . 'Marcos Matioli';
			//int
			$idade = 29;

			
			//float
			$peso = 82.5;

			//boolean
			$fumante_sn = true; //(true = 1) ou (false = vazio)

			//... lógica ...//

			$idade = '30';

			$idade2 = $idade+1;
			

		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>
		<p>Soma de idade + 1 = <?= $idade2?></p>
		
		<button onclick="somar()" id="btn">Mostrar o resultado</button>
		<script>
			setInterval(function(){
				var k = 0
				if(document.getElementById('btn').innerHTML == 'Obrigado'){
					
					document.getElementById('btn').innerHTML = "Dinada"
				}else{
					document.getElementById('btn').innerHTML = 'Obrigado'
				}
			},5000)
		</script>
	</body>
</html>