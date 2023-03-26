<?php  
	
	# Incluindo um arquivo
	include_once 'database.php';
	

	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);

	$acesso = false;
	foreach ($acessos as $conta) {
		
		if($conta['email'] == $email && $conta['senha'] == $senha){			
			$acesso = true;
			$user = $conta;
			break;
		}elseif($conta['email'] == $email && $conta['senha'] != $senha){			
			$acesso = false;
		}

	}

	# Tratar o login
	if($acesso){
		if($user['tipoUser'] == "admin"){
			header("location: admin.php");
		}elseif($user['tipoUser'] == "operador"){
			header("location: operador.php");
		}
	}else{
		header("location: index.php?msg=error");
	}



?>