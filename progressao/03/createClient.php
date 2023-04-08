<?php  
	include_once 'connect.php';
	include_once 'functions.php';

	# Gravando os dados no banco
	$result = insert("clients", $_POST);

	if($result){
		header("location: listClients.php");
	}else{
		header("location: cadClients.php?mgs=error");		
	}
?>