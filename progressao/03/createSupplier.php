<?php

	// ini_set("display_errors",1);

	include_once 'db/connect.php';
	include_once 'db/functions.php';

	# Gravando os dados no banco
	$result = insert("suppliers", $_POST);

	if($result){
		header("location: listSuppliers.php");
	}else{
		header("location: cadSuppliers.php?mgs=error");		
	}
?>