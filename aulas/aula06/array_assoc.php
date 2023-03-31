<?php  

	
	/* Outras formas de criar um array 
		$cadastro = array("Anthony", "anthony@email", "123.456.787-89");
		$cadastro = [ "Anthony", "anthony@email", "123.456.787-89" ];
	*/

	$anthony["Nome"] = "Anthony";
	$anthony["Email"] = "anthony@email";
	$anthony["CPF"] = "123.456.787-89";
	$anthony["Endereco"] = "Rua bem alí";
		
	$luzia["Nome"] = "Luzia";
	$luzia["Email"] = "luzia@email.com";
	$luzia["CPF"] = "78488549644";

	$maria["Nome"] = "Maria";
	$maria["Email"] = "maria@email.com";
	$maria["CPF"] = "78488549644";


	$cadastros = array(0=>$anthony, 1=>$luzia, 2=>$maria);

	/*foreach($anthony as $dados){
		echo "$dados <br>";
	}*/
	foreach($cadastros as $cadastro){
		echo "Mostrando...<br>";
		foreach($cadastro as $dados){
			echo "$dados <br>";
		}
		echo "<hr>";
	}









?>
