<?php  

	/*
		for($inicio;$condição;$incremento){
			//instruções...
		}
	*/

	# Problema: criar um contador que mostre os numeros de 0 a 100
	
	for($t=0;$t<101;$t++){
		echo "Numero $t <br>";
	}

	$nLinhas = 10;
	$nColunas = 5;

	

?>

<select>
	<?php for($dia=1;$dia<32;$dia++): ?>
		<option><?=$dia;?></option>
	<?php endfor; ?>
</select>

<select>
	<?php for($mes=1;$mes<13;$mes++): ?>
		<option><?=$mes;?></option>
	<?php endfor; ?>
</select>

<select>
	<?php for($ano=2023;$ano>1899;$ano--): ?>
		<option><?=$ano;?></option>
	<?php endfor; ?>
</select>