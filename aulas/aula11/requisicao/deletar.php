<?php  


	# Ler o arquivo de clientes
	$dados = file("clientes.txt");		

	# Identificar o id Que eu quero excluir do arquivo txt
	$id = $_GET['id'];

	# Excluir o cara do array
	unset($dados[$id]);

	# Excluir o arquivo anterior
	unlink("clientes.txt");

	# Reescrever os dados no arquivo
	$string = implode("", $dados);

	$arquivo = fopen("clientes.txt", "a+");
	fwrite($arquivo, $string);
	fclose($arquivo);
	
	# Redirecionar para a listagem
	header("location: lista.php");







?>