<?php
	/***************************************************************
	*Exemplo de cadastro de Cliente utilizando Orientação a Objetos
	*Por Rafael Custodio: http://www.custodioti.com.br
	*Este código fonte foi desenvovido apenas para fins didáticos.
	****************************************************************/
	//Criando classe CLIENTE

	class Cliente {
		public $nome;
		public $sobrenome;
		public $idade;
		public $cpf;
		public $telefone;
		public $TipoCliente;

		function cadastrarCliente(){

			print 'Nome do Cliente:	' . $this->Nome . ' ' . $this->sobrenome . "<br>\n";
			print 'Idade:	' . $this->Idade . "<br>\n";
			print 'CPF:	' . $this->Cpf . "<br>\n";
			print 'Telefone:  ' . $this->Telefone . "<br>\n";
			print 'Cliente Fidelidade:	' . $this->TipoCliente;
		}
	}