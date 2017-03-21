<!DOCTYPE html>
<html>
	<head>
		<title>Calculo</title>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
		<body>
			<div class="container">
				<h4>	Insira 3 numeros inteiros. 
						Os resultados serão a média destes 3 números, a multiplicação e
						tomando o 1º como base, a porcentagem em relação ao segundo e ao terceiro.
				</h4>
				<hr>
					<input type="number" id="num1" value="0" onblur="calcular();" />
						<input type="number" id="num2" value="0" onblur="calcular();" />
							<input type="number" id="num3" value="0" onblur="calcular();"/><p></p>
								<span id="media" class="text-success"></span><br>
									<span id="multi" class="text-danger" ></span><br>
										<span id="divi" class="text-warning"></span><br>
											<span id="divi2" class="text-info"></span><br>

										<script> calcular();</script>
										
									</div>
								</body>
								<!-- JS -->
							<script type="text/javascript" src="js/calcular.js"></script>
						</html>