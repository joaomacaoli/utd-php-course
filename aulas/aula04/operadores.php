<?php  
	
	$a = 4;
	$b = 5;

	echo $a + $b;
	echo "<br>";

	echo $a - $b;
	echo "<br>";

	echo $a * $b;
	echo "<br>";	

	echo $a / $b;
	echo "<br>";

	# > maior que, < menor que, >= maior igual, <= menor igual
	# == iguais, != diferentes, === identico
	# Lógicos: E (&&), OU (||), NÃO (!) 

	# Testar se a é maior que o B
	//if($a > $b){ echo "A é maior"; }else{ echo "B é maior";}

	echo ($a > $b) ? "A é maior" : "B é maior";

	echo "<hr>";

	$a++;
	echo "Valor de A: ".$a."<br>";
	$a++;
	echo "Valor de A: ". $a ."<br>";
	echo "???? Valor de A: ". $a++ ."<br>"; # (??????)
	echo "Valor de A: ". $a ."<br>";
	echo "Valor de A: ". ++$a ."<br>";


	$a += 5; # 13
	$a -= 10; # 3
	$a *= 10; #30
	$a /= 5; # 6
	

?>