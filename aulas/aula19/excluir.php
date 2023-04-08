<?php  

	include_once 'connect.php';
	include_once 'functions.php';

	
	switch($_POST['action']){

		case "products":
			
			unset($_POST['action']);
			# Gravando os dados no banco
			$filter['id_product'] = $_POST['id_product'];
			
			$result = delete("products", $filter);

			if($result){
				header("location: listaProdutos.php");
			}else{
				header("location: cadastroProduto.php?mgs=error");		
			}
		break;

		case "clients":
		
			unset($_POST['action']);
			# Gravando os dados no banco
			$filter['id_client'] = $_POST['id_client'];
			
			$result = delete("clients", $filter);

			if($result){
				header("location: listaClientes.php");
			}else{
				header("location: listaClientes.php?mgs=error");		
			}
		break;

	}


	


?>