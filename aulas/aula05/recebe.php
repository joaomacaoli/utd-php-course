<?php

	# Recebendo os dados do Formulário
	$nomeCompleto = $_POST['nomeCompleto'];
	$dtNasc = $_POST['dtNasc'];
	$email = $_POST['email'];
	$endereco = $_POST['endereco'];
	$senha = $_POST['senha'];
	$confSenha = $_POST['confSenha'];


	# Mostrando os dados recebidos do formulário
	echo "Olá $nomeCompleto <br>";
	echo "Seu aniversário é no dia $dtNasc <br>";
	echo "Seu email é $email <br>";
	echo "Você mora em endereço $endereco <br>";

	if($senha == $confSenha){
		echo "Suas senhas conferem! <br>";
	}else{
		echo "Suas senhas não conferem <br>";
	}

	echo rand(11111111111,99999999999);

?>