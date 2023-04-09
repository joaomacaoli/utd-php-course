<?php  
	include_once 'db/connect.php';
	include_once 'db/functions.php';

	# Gravando os dados no banco
	$result = insert("products", $_POST);

	if($result){
		header("location: listProducts.php");
	}else{
		header("location: cadProducts.php?mgs=error");		
	}
?>