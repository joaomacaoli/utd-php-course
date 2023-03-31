<!-- Crie uma calculadora onde possamos calcular as operações básicas (somar, subtrair, multiplicar e dividir) além de potenciação e raiz quadrada. Use formulários. (2 esc)
 -->
<form action="#" method="post">
	<input type="number" name="num1" placeholder="N1">
	<select name="op">
		<option value="+"> + </option>
		<option value="-"> - </option>
		<option value="/"> / </option>
		<option value="*"> * </option>
		<option value="p"> Pot </option>
		<option value="r"> Raiz </option>
	</select>
	<input type="number" name="num2" placeholder="N2">
	<input type="submit" value="Calcular">
</form>

<?php 
	
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$op = $_POST['op'];

	if($op == '+'){
		echo ($num1+$num2);		
	}elseif($op == '-'){
		echo ($num1-$num2);		
	}elseif($op == '*'){		
		echo ($num1*$num2);
	}elseif($op == '/'){		
		echo ($num1/$num2);
	}elseif($op == 'p'){
		$total = 1;
		for($p=1;$p<=$num2;$p++){
			$total *= $num1;
		}
		echo $total;

		// pow($num1, $num2)
	}elseif($op == "r"){
		echo sqrt($num1)."<br>";
		echo sqrt($num2)."<br>";
	}


?>

