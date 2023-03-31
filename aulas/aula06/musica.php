<?php  

	/* 
		1 elefante incomoda muita gente
		2 elefantes incomodam, incomodam muito mais!
		3 elefantes incomodam muita gente
		4 elefantes incomodam, incomodam
		Incomodam, incomodam muito mais!
		5 elefantes incomodam muita gente
		6 elefantes incomodam, incomodam, incomodam
		...
		n elefantes
	*/

	$nElefantes = rand(0,10);
	
	for($i=1; $i<=$nElefantes;$i++){

		if($i==1){
			$estrofe = "$i elefante incomoda muita gente... <br>";
		}else{

			# Teste de paridade do numero
			if($i % 2 == 0){
				$estrofe = "$i elefantes ";
				# Incomodam...
				for($j=1;$j<=$i;$j++){
					$estrofe .= "incomodam, ";
				}

				$estrofe .= " muito mais...<br>";

			}else{
				$estrofe = "$i elefantes incomodam muita gente...<br>";
			}
		}

		echo $estrofe;
	}	

?>