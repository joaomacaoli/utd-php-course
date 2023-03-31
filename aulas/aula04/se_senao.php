<?php  

	# Problema: Como saber se determinada idade pode comprar cerveja ou não
	# Solução:  Caso a idade do elemento seja maior do que 18 então pode comprar cerveja senão, ele não pode comprar!

	/*
		if($condição){
			// Resultado da condição caso verdade	
		}else{
			// Resultado da condição caso falsidade
		}
	*/
	
	//$idade = rand(1,99);
	$idade = 18;

	if($idade > 17){
		echo "Sua idade: ".$idade."<br>";
		echo "Pode pegar a Heineker na geladeira!";
	}else{
		echo "Sua idade: ".$idade."<br>";
		echo "Vai timbora, moleque!!";
	}



?>

