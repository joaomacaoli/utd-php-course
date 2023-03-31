<?php  

	
	/* Outras formas de criar um array 
		$cadastro = array("Anthony", "anthony@email", "123.456.787-89");
		$cadastro = [ "Anthony", "anthony@email", "123.456.787-89" ];
	*/

	$anthony[] = "Anthony";
	$anthony[] = "anthony@email";
	$anthony[] = "123.456.787-89";
	$anthony[] = "Rua bem alí";
		
	$luzia[] = "Luzia";
	$luzia[] = "luzia@email.com";
	$luzia[] = "78488549644";

	$maria[] = "Maria";
	$maria[] = "maria@email.com";
	$maria[] = "78488549644";


	$cadastros = array(0=>$anthony, 1=>$luzia, 2=>$maria);

	//$banco = array($cadastros);

	# Como mostrar o nome da Luzia a partir do array de cadastros?
	//echo $banco[0][1][0];
	for($a=0; $a<count($cadastros);$a++){
		echo "Mostrando...<br>";
		
		/*print_r($cadastros[$a]);
		echo "<hr>";*/
		for($b=0; $b<count($cadastros[$a]);$b++){
			echo $cadastros[$a][$b]."<br>";
		}
		echo "<hr>";
	}	




?>
