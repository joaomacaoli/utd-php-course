<?php  

	$anthony['nome'] = "Anthony";
	$anthony['email'] = "anthony@email.com";
	$anthony['senha'] = sha1('1234');
	$anthony['cpf'] = "60393507335";
	$anthony['tipoUser'] = "admin";

	$eric['nome'] = "Eric";
	$eric['email'] = "eric@email.com";
	$eric['senha'] = sha1('4321');
	$eric['cpf'] = "04122508993";
	$eric['tipoUser'] = "operador";

	$maria['nome'] = "Maria";
	$maria['email'] = "maria@email.com";
	$maria['senha'] = sha1('1234');
	$maria['cpf'] = "12345678999";
	$maria['tipoUser'] = "operador";

	# Array que guarda todos os acessos
	$acessos = array($anthony, $eric, $maria);

	//require_once 'qualquer.php';
?>