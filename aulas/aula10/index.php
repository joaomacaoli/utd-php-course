<?php 


	# Array
	$array = ['Morango', 'Banana', 'Manga','Goiaba', 'Limão'];

	echo "Array original: ";
	print_r($array);
	echo "<br>";

	# Converter um array para uma string
	$string = implode(" - ", $array);
	echo "Conversão para String: ".$string."<br>";

	# Conversão de uma string em um array
	$outroArray = explode(' - ', $string);

	echo "Array que era uma string: ";
	print_r($outroArray);
	

	$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis purus vel ornare tempor. Proin vitae accumsan arcu. Nullam tristique, sem vitae porttitor finibus, justo sem pretium leo, et gravida lacus justo a nulla. Pellentesque congue nec ante quis hendrerit. Aenean metus risus, mollis quis tincidunt in, commodo et ex. Sed suscipit lorem eget felis euismod consectetur. Aliquam erat volutpat.";

	$loremArray = explode(" ", $lorem);

	echo "<pre>";
		print_r($loremArray);
	echo "</pre>";

	/*
	$string = "";
	foreach( $frutas as $f ){
		$string .= "$f - ";
	}	
	
	/*var_dump($frutas);
	//substr(string, start, end);
	echo $string."<br>";
	echo substr($string,0,strlen($string)-3)."<br>";
	echo substr($string,0,-3);
	*/

?>