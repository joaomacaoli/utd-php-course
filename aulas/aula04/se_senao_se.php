<?php  

	# Problema: Eu quero saber se uma determinada idade é uma idade de criança (se idade <= 12), idade de adolescente (se idade <=18), idade de adulto (se idade <=59) ou idade de idoso (> 59);

	$idade = rand(0,99);

	if($idade < 13){
		echo "Idade: $idade <br>";
		echo "CRIANCA";
	}else{		
		if($idade < 19){
			echo "Idade: $idade <br>";
			echo "ADOLESCENTE";
		}else{			
			if($idade < 60){
				echo "Idade: $idade <br>";
				echo "ADULTO";
			}else{
				echo "Idade: $idade <br>";
				echo "IDOSO";
			}
		}

	}
	echo "<hr>";
	if($idade < 13){
		echo "Idade: $idade <br>";
		echo "CRIANCA";
	}elseif($idade < 19){
		echo "Idade: $idade <br>";
		echo "ADOLESCENTE";
	}elseif($idade < 60){
		echo "Idade: $idade <br>";
		echo "ADULTO";
	}else{
		echo "Idade: $idade <br>";
		echo "IDOSO";
	}



?>