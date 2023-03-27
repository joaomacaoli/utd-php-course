<?php  
	# Ler o arquivo de clientes
	$dados = file("data/suppliers.txt");		

	# Identificar o id Que eu quero excluir do arquivo txt
	$id = $_GET['id'];

	# Excluir o cara do array
	unset($dados[$id]);

	# Excluir o arquivo anterior
	unlink("data/suppliers.txt");

	# Reescrever os dados no arquivo
	$string = implode("", $dados);

	$arquivo = fopen("data/suppliers.txt", "a+");
	fwrite($arquivo, $string);
	fclose($arquivo);
	
	# Redirecionar para a listagem
    header ("location: listSuppliers.php");
