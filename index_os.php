<!DOCTYPE html>
<html>
<head>
	<title>CENTRO AUTOMOTIVO </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ordem de serviço Ipiranga">
    <meta name="author" content="Rafael Custodio">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<center><h3><strong>CENTRO AUTOMOTIVO</strong></h3><hr>
			<div class="col-md-6">
			<i><a href="mailto: comerciodepneusltda@hotmail.com">comercio@centroautomotivo.com</a></i>
			<p>
				<b>Loja 01</b><br>
				Rua Nome da rua, 000, Centro - Vinhedo - SP<br>
				Fones: (00)0000-0000 / (00)0000-0000<br>
				ID: 000000
			</p><hr>
			</div>
			<div class="col-md-6">
				<i><a href="www.automotivoipiranga.com.br">www.centroautomotivo.com.br</a></i>
				<p>
					<b>Loja 02</b><br>
					Nome da rua, 000, Centro - Cidade - SP<br>
					Fones: (00)0000-0000 / (00)0000-0000<br>
					ID: 000.000 / 000.00
				</p><hr>
			</div></center>

			<!-- Dados do cliente... -->

			<div class="col-xs-3">
			  <fieldset><legend>Dados do Cliente</legend></fieldset>
    			<label for="ex1">DATA DA EMISSÃO</label>
    				<input class="form-control" id="ex1" type="date" name="dyemissao">
  			</div>
				<div class="col-md-12">
  			<br>
  				<label>Carro: </label>
  					<input type="text" name="carro" class="form-control" maxlength="50">
		</div>
			<div class="col-md-6">
			Nome:
			<input type="text" name="nome" class="form-control" maxlength="50">
			</div>
			<div class="col-md-6">
				Telefone:
				<input type="text" name="fone" class="form-control" maxlength="15" placeholder="(00)0 0000-0000">
					<hr>
			</div>
			<!-- TABELA -->

				<div class="col-md-12">
					<table class="table table-hover">
					    <thead>
					      <tr>
					        <th>Quantidade</th>
					        <th>Discriminação dos Serviços</th>
					        <th>Pr. Unit.</th>
					        <th>TOTAL</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Conserto <input type="checkbox" name="cons" value="cons">
					        	Conserto Quente <input type="checkbox" name="qhent" value="quent"></td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Bico</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Pivot</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Camâra</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Pneus: Usado <input type="checkbox" name="pneu" value="usado">
					        	Novo <input type="checkbox" name="pneu" value="novo">
					        	Remold <input type="checkbox" name="pneu" value="remold"></td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Bucha da bandeja</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Jogo Pastilha</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Intermediário</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Kit amortecedor</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Rodízio</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Montagem</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Vulcanização</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Balanceamento</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Alinhamento</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Cambagem</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Bateria</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Silencioso Traseiro</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Disco de freio</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Litro de óleo</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Filtro de óleo</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      <tr>
					        <td><input type="number" name="quant"></td> <!-- quantidade -->
					        <td>Mão de obra</td>
					        <td><input type="number" name="pre"></td><!-- preço unitario -->
					        <td><input type="number" name="total"></td><!-- total -->
					      </tr>
					      
					    </tbody>
					  </table>
				</div>
					<div class="col-md-8">
					  	<strong>Garantia de alinhamento - 30 Dias</strong>
					  </div>
					  	<div class="col-md-4">
					  		<strong>TOTAL: <input type="number" name="total" class="form-control"></strong>
					  	</div>
					  	<div class="col-md-12">	<label>Detalhes de pagamento</label></div>

		<div class="col-md-4">
		Prazo de pagamento: <input type="text" name="prazo" maxlength="30"> 
		</div>
		<div class="col-md-4">
			Entrada: <input type="number" name="entrada" placeholder="R$">
		</div>
		<div class="col-md-4">
			Restante: <input type="number" name="restante" placeholder="R$">
		</div>
		<div class="col-md-12"><hr>
			<center><input type="button" name="imprimir" value="Imprimir" class="btn btn-default">
			</center>	<hr>
		</div>
					  		

	</div>

</body>
</html>

<style type="text/css">
	
  .container {
    border-width: medium;
    border-style: solid;
    border-color: #333;
    }
    .table{
    	border-color: #333;
    	border-width: medium;
    border-style: solid;
    }
</style>