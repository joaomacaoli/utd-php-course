<?php  

	class Carro{

		// O que um Carro tem?
		public $marca;
		public $modelo;
		public $tracao;
		public $combustivel;
		public $cor;
		public $nPortas;
		public $km = 0;

		# Método construtor da Classe
		public function __construct($tracao, $combustivel){
			$this->tracao = $tracao;
			$this->combustivel = $combustivel;
		} 

		// O que um Carro pode fazer?
		public function mostraCarro(){
			echo "Marca: ".$this->marca."<br>";
			echo "Modelo: ".$this->modelo."<br>";
			echo "Tração: ".$this->tracao."<br>";
			echo "Combustivel: ".$this->combustivel."<br>";
			echo "Cor: ".$this->cor."<br>";
			echo "Nº Portas: ".$this->nPortas."<br>";
			echo "<hr>";
		}

		public function movimento($km){	
			$this->km += $km;		
			echo "O carro ".$this->modelo." andou ".$this->km." KMs <hr>";
		}
		
	}

?>