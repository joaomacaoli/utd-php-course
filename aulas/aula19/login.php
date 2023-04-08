<?php 

	require_once 'connect.php';
	require_once 'functions.php';

	# Recebendo os dados do formulário
	$email = $_POST['email'];
	$pass = $_POST['password'];

	# Verificar se existe alguem no banco de dados
	$log = select("users", null, [ "user_email"=>$email ], " limit 1")[0];

	
	# Validar o login 
	if(!$log){
		header("location: index.php?msg=Login ou senha Inválidos");
	}elseif(sha1($pass) != $log['user_password']){
		header("location: index.php?msg=Login ou senha Inválidos");
	}else{
			
		# Criando uma sessão
		session_start();

		$_SESSION[md5("user_data")] = $log;

		header("location: index.php");
	}
	
?>