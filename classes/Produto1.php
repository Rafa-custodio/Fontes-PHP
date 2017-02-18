<?php

class Produto {
	public $Codigo;
	public $Descricao;
	public $Preco;
	public $Quantidade;

	function ImprimeEtiqueta(){
		print 'Código:	' . $this->Codigo . "<br>\n";
		print 'Descrição:	' . $this->Descricao . "<br>\n";
		print 'Preço:	' . $this->Preco . "<br>\n";
		print 'Quantidade:	' . $this->Quantidade . "<br>\n";
	}
}


?>