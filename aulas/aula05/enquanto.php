<?php  
	
	/*
		while($consiçaõ){
			bloco de comandos
		}

	*/

	# Problema: Crie um contador que mostre os numeros de 0 a 10

	$w = 0;
	
	while($w < 11){
		echo "Número $w <br>";		
		$w++;
	}

?>

<select>
	<?php 
		$dia = 1;
		while($dia<32): 
	?>
		<option><?=$dia;?></option>
	<?php 
		$dia++;
		endwhile; 
	?>
</select>