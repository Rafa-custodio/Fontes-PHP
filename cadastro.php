<?php
	/***************************************************************
	*Exemplo de cadastro de Cliente utilizando Orientação a Objetos
	*Por Rafael Custodio: http://www.custodioti.com.br
	*Este código fonte foi desenvovido apenas para fins didáticos.
	****************************************************************/
	require 'classes\Clientes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente OO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
</head>
<body>
<div class="container">
	<h2 class="alert alert-info"> Cadastro de novos Clientes: </h2><p><hr></p>
		<div class="col-md-5">
			<fieldset>
				<form method="post">
					<label><u>Cadastro de clientes:</u></label><br><hr>
						<label>Nome: </label>
						<input type="text" name="nome" class="form-control">
							<label>Sobrenome: </label>
							<input type="text" name="sobrenome" class="form-control">
								<label>Idade: </label>
								<input type="number" name="idade" class="form-control">
									<label>CPF: </label>
									<input type="text" name="cpf" class="form-control" maxlength="11">
										<label>Telefone: </label>
										<input type="text" name="telefone" class="form-control">
											<label>Cliente fidelidade:</label>
											<select name="fidelidade" class="form-control">
												<option>Sim</option>
												<option>Não</option>
											</select>
												<input type="submit" name="btn" class="btn btn-warning">

											</form>
										</fieldset>
									</div>
								<div class="col-md-6" style="font-size: 25px">
											
							<?php
						if (isset($_POST['btn'])) {

					$cliente = new Cliente;
				$cliente->Nome = $_POST['nome'];
			$cliente->Sobrenome = $_POST['sobrenome'];
		$cliente->Idade = $_POST['idade'];
	$cliente->Cpf = $_POST['cpf'];
$cliente->Telefone = $_POST['telefone'];
$cliente->TipoCliente = $_POST['fidelidade'];

	$cliente->cadastrarCliente();

		}
			?>

				</div>
						</div>
								</body>
										</html>