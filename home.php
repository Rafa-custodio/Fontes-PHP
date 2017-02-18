<?php  	//chama a classe produto
	require'classes\Produto1.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Orientação a objetos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h2 class="alert alert-warning"> Cadastro de produtos!! </h2><p><hr></p>
<div class="col-md-5">
	<form method="post">

		<label>Codigo do Produto: </label>
		<input type="number" name="codigo" class="form-control">
			<label>Descrição do Produto</label>
			<textarea class="form-control" name="descricao"></textarea>
				<label>Preço R$: </label>
				<input type="number" name="preco" class="form-control">
					<label>Quantidade:</label>
					<input type="number" name="quantidade" class="form-control">
						<input type="submit" name="botao" class="btn btn-lg btn-primary">	

						</form>
					</div>
				<div class="col-md-6 text-blue">
			<?php
						
		if (isset($_POST['botao'])) {
		//Cria o objeto
	$produto = new Produto;   
//Atribuindo valores
$produto->Codigo = $_POST['codigo'];
$produto->Descricao = $_POST['descricao'];
$produto->Preco = $_POST['preco'];
$produto->Quantidade = $_POST['quantidade'];

							
$produto->ImprimeEtiqueta();
			}
							

	?>
		
</div>
</div>
</body>
</html>

