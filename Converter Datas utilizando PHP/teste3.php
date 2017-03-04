<?php
	require('converter.php');
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Teste 3</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		</head>
			<body>
				<div class="container">
				<form method="post" action="#!">
					<label>Digite uma data em formato americano</label><br>
					<input type="text" name="data" placeholder="0000-00-00" />
					<input type="submit" name="btn" class="btn btn-default" value="CONVERTER">
				</form>
					<span class="text-success">
						<strong>
					<?php
						if (isset($_POST['btn'])) {
							$data1 = $_POST['data'];
							converter($data1);
							
						}
					?>
						</strong>
					</span>
				</div>	
			</body>
	</html>