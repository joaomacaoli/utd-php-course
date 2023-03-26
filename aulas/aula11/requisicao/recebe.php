<?php  

	# Receber os dados do formulário
	$dados = $_POST;

	# Tratando a data
	$dt = explode("-",$dados['dtNasc']);
	$dados['dtNasc'] = $dt[2]."/".$dt[1]."/".$dt[0];

	# Transformar os dados em uma string
	$string = implode(" - ", $dados);

	# Guardar os dados do cadastro em arquivo TXT
	$arquivo = fopen("clientes.txt", "a+");
	fwrite($arquivo, $string."\n");
	fclose($arquivo);

	# Redirecionar para o cadastro novamente
	header("location: lista.php");





?>