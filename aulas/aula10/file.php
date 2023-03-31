<?php 
	
	# Criando arquivos com php
	$arquivo = fopen("teste.log", "a+");

	$string = "[ ERRO ] Erro na query... ".date("d/m/Y H:i:s")."\n";

	# Escrevendo os dados no arquivo
	fwrite($arquivo, $string);

	# Fechar o arquivo
	fclose($arquivo);


?>