<?php  

	# Receber os dados do formulário
	$dados = $_POST;

	# Transformar os dados em uma string
	$string = implode(" - ", $dados);

	# Guardar os dados do cadastro em arquivo TXT
	$arquivo = fopen("clientes.txt", "a+");
	fwrite($arquivo, $string."\n");
	fclose($arquivo);

	# Redirecionar para o cadastro novamente
	header("location: lista.php");





?>