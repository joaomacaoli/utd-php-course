<?php

	# Mostrando os dados recebidos do formulário
	foreach($_POST as $chave=>$valor){
		echo $chave." -> ".$valor."<br>";
	}
?>