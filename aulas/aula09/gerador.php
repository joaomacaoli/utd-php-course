<?php 


	function jogos($nJogos){

		$jogos = array();
		
		for($a=1;$a<=$nJogos;$a++){

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

			$jogos[] = $dezenas;

			unset($dezenas);
		}

		return $jogos;
	}

	echo "<pre>";
	print_r(jogos(3));

?>