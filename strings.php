<?php
		/**
		** 	Descrição: Exemplo de uso de algumas funções nativas do PHP manipuladoras de String.
		** Autor: Rafael Custodio
		**/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Funções em PHP</title>
</head>
<body>
		<h1>Manipulação de cadeia de caracters com PHP</h1>
			<p>STRTOUPPER - 
			STRTOLOWER - 
			SUBSTR - 
			STRPAD - 
			STR_REPEAT - 
			STRLEN - 
			STR_REPLACE - 
			<hr>

			<div>
				<form action="#!" method="post">
					<label>Digite uma palavra: </label>
					<input type="text" name="texto" maxlength="20" placeholder="Texto aqui..."/><br>
						<input type="radio" name="str" value="strtoupper" checked="true">strtoupper </input><br>
						<input type="radio" name="str" value="strtolower">strtolower</input><br>
						<input type="radio" name="str" value="substr">substr</input><br>
						<input type="radio" name="str" value="strpad">strpad</input><br>
						<input type="radio" name="str" value="str_repeat">str_repeat</input><br>
						<input type="radio" name="str" value="strlen">strlen</input><br>
						<input type="radio" name="str" value="str_replace">str_replace</input><br>
							<input type="submit" name="botao" value="Confirmar"/>
					
				</form>
					<h5>

	<?php
		if (isset($_POST['botao'])) {
					
			$valor = $_POST['str'];
			$texto = $_POST['texto'];

				switch ($valor) {
					case 'strtoupper':
						echo strtoupper($texto);
					break;
						case 'strtolower':
							echo strtolower($texto);
						break;
							case 'substr':
								echo substr($texto, 1) . '<br>';
								echo substr($texto, -3) . '<br>';
								echo substr($texto, 1, 3) . '<br>';
							break;
								case 'strpad':
									echo str_pad($texto, 20, '*', STR_PAD_LEFT) . '<br>';
									echo str_pad($texto, 20, '*', STR_PAD_BOTH) . '<br>';
									echo str_pad($texto, 20, '*') . '<br>';
								break;
									case 'str_repeat':
										echo str_repeat($texto , 5);
									break;
										case 'strlen':
											echo 'O comprimento da string é: ' . strlen($texto);
										break;
											case 'str_replace':
												echo str_replace($texto, 'NOVOVALOR', $texto);
											break;
									
										default:
											echo '<br><strong> Escolha uma opção! </strong>';
										break;
								}
							}
			?>
				</h5>
			</div>

</body>
	<!-- Este código abordou o uso de funções para manipulação de cadeia de strings
		 Tambem o uso do comando Switch (case) e o uso de if com o isset(). -->

</html>	