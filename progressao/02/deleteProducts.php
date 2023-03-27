<?php  
	# Ler o arquivo de clientes
	$dados = file("data/products.txt");		

	# Identificar o id Que eu quero excluir do arquivo txt
	$id = $_GET['id'];

	# Excluir o cara do array
	unset($dados[$id]);

	# Excluir o arquivo anterior
	unlink("data/products.txt");

	# Reescrever os dados no arquivo
	$string = implode("", $dados);

	$arquivo = fopen("data/products.txt", "a+");
	fwrite($arquivo, $string);
	fclose($arquivo);
	
	# Redirecionar para a listagem
    header ("location: listProducts.php");
