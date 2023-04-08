<?php  

	include_once 'Carro.php';
	include_once 'Produto.php';

	$chocolate = new Produto("Chocolate em barra 300g", 10, 5.99);
	unset($chocolate);
	var_dump($chocolate);


	$cachorro = new stdClass;
	$cachorro->raca = "Vira Lata";
	$cachorro->tamanho = "Médio";
	$cachorro->tipo = "Caça/Doméstico";

	var_dump($cachorro);

	//unset($chocolate);
	// echo 'Descrição: '.$chocolate->descricao."<br>";
	// echo 'Estoque: '.$chocolate->estoque."<br>";
	// echo 'Preco: '.$chocolate->preco."<br>";



	/*
	# Instanciando um objeto do tipo Carro
	$fusca = new Carro("Motora", "Gasolina");
		$fusca->marca = 'Volkswagem';
		$fusca->modelo = 'Fusca RT64';
		//$fusca->tracao = 'Motor';
		//$fusca->combustivel = 'Gasolina';
		$fusca->cor = "Preto";
		$fusca->nPortas = "2";

	$celta = new Carro("Motora", "Gasolina/Alcool");
		$celta->marca = 'Chevrolet';
		$celta->modelo = 'Celta LS';
		//$celta->tracao = 'Motor';
		//$celta->combustivel = 'Gasolina/Alcool';
		$celta->cor = "Preto";
		$celta->nPortas = "4";

	$fusca->mostraCarro();
	$celta->mostraCarro();

	$celta->movimento(30);
	$celta->movimento(30);
	$celta->movimento(30);

	$opala = new Carro("Motora", "Gasolina");
	$opala->marca = "Chevrolet";
	$opala->modelo = "Opala SS";
	$opala->cor = "Metálico Azul";
	$opala->nPortas = '4';
	$opala->mostraCarro();
	*/

