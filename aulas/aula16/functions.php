<?php  

	function insert($table, $data = array()){

		# 1º parte da Query - Tabela
		$query =  "INSERT INTO `$table` ";

		# 2º Parte da Query
		$fields = [];
		$values = [];
		foreach ($data as $key => $value) {
			$fields[] = $key;
			$values[] = $value;
		}

		$fields = implode('`, `', $fields);
		$query .= "(`$fields`)";

		# 3º Parte da query
		$values = implode("', '", $values);
		$query .= " VALUES ('$values'); ";

		global $conn;

		$result = mysqli_query($conn, $query) or die(mysqli_error());

		return $result;


	}


	function insertProduct($name, $code, $price, $stock){

		$query = "
			INSERT INTO `products` (`product_name`,	`product_code`,	`product_price`,`product_stock`)
			VALUES ('$name', '$code', $price, $stock);
		";

		global $conn;

		$result = mysqli_query($conn, $query) or die(mysqli_error());

		return $result;

	}

	function listProducts(){
		
		global $conn;

		# Inserção de Registro na Tabela
		$query = "SELECT * FROM `products`"; 

		$result = mysqli_query($conn, $query) or die(mysqli_error());

		if(!$result){
			return false;
		}

		$products = [];
		while($row = mysqli_fetch_assoc($result)){
			$products[] = $row;
		}

		return $products;
	}

?>