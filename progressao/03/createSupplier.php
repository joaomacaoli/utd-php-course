<?php

	// ini_set("display_errors",1);

	include_once 'connect.php';
	include_once 'functions.php';

	# Gravando os dados no banco
	$result = insert("suppliers", $_POST);

	if($result){
		header("location: listSuppliers.php");
	}else{
		header("location: cadSuppliers.php?mgs=error");		
	}
?>