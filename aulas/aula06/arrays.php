<?php  

	# O que é um array?!

	/*$fruta = "Caju";
	$fruta2 = "Manga";
	$fruta3 = "Murici";
	//...
	$frutaN = "Castanhola";
	*/
		
	# Array -> chave => valor
	# As chaves do array em php começam com 0
	$frutas = array("Caju", "Manga", "Murici", "Castanhola", "Goiaba","Acerola", "Melão", "melancia", "Maracuja","Oiti","Uva", "Tomate", "Banana", "Abacate", "Abacaxi","Morango","Tangerina","Lima");

	for($u=0; $u<count($frutas);$u++){
		echo "Tem ".$frutas[$u]."<br>";
	}

	echo "Oeeeeee o carro da fruta chegou....";
?>