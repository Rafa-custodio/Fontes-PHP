<?php
	 // @author Rafael Custodio
	// Exemplo de conexão PHP com banco de dados SQLserver utilizando PDO
	 
try{

$con = new PDO("odbc:Driver={SQL Server};Server=localhost;Database=DADOS; Uid=ROOT;Pwd=1234;"); 

 	echo '<div class="col s12 red accent-1">';
 	echo 'Conectado ao banco <b>DADOS</b>';
 	echo '</div>';
}catch (PDOException $exception)
{
  die("Não é possível se conectar ao banco de dados.<br />Error message:<br /><br />$exception.");
  exit;
}

			
?>