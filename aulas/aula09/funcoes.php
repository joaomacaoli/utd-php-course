<?php  
	/*
	$dezenas = array();
	
	for ($n=1; $n < 7;$n++) { 
		# Gerando um numero randomico 
		$numero = rand(1,60);

		if($n == 1){
			$dezenas[$numero] = $numero;
		}else{

			while(isset($dezenas[$numero])){
				$numero = rand(1,60);
			}

			$dezenas[$numero] = $numero;
		}
	}


	$dezenas1 = array();
	
	for ($n=1; $n < 7;$n++) { 
		# Gerando um numero randomico 
		$numero = rand(1,60);

		if($n == 1){
			$dezenas1[$numero] = $numero;
		}else{

			while(isset($dezenas1[$numero])){
				$numero = rand(1,60);
			}

			$dezenas1[$numero] = $numero;
		}
	}


	asort($dezenas);
	asort($dezenas1);
	print_r($dezenas);
	echo "<br>";
	print_r($dezenas1);
	*/
	
	function soma($num1, $num2){
		echo $num1 + $num2;
		echo "<br>";
	}

	
	function imc($peso, $altura){
		$imc = ($peso/pow($altura,2));		
		return $imc;
	}

	$imc = imc(112, 1.79);

?>