<?php

	# Receber os dados do formulário
    $data = $_POST;

	# Tratando a data
	$date = explode("-",$data['formRegistrationDate']);
	$data['formRegistrationDate'] = $date[2]."/".$date[1]."/".$date[0];

	# Transformar os dados em uma string
	$string = implode(" - ", $data);

    # Guardar os dados do cadastro em arquivo TXT
	$arquivo = fopen("data/suppliers.txt", "a+");
	fwrite($arquivo, $string."\n");
	fclose($arquivo);

	# Redirecionar para o cadastro novamente
    header ("location: cadSuppliers.php");

?>
