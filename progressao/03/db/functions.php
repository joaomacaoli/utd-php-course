<?php

function insert($table, $data = array()) {
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

# SELECT *|fields  FROM `products` WHERE `filtro` = 'valor' ORDER BY campo ASC|DESC
function select($table, $fields, $filters, $extra) {

	# 1° Parte da Query - SELECT
	$query = "SELECT ";

	# 2° Parte da Query - Tratamento de campos
	if ($fields == null) {
		$query .= "* ";
	} else {
		$fields = implode('`, `', $fields);
		$query .= "`$fields` ";
	}

	# 3° Parte da Query - Tabela
	$query .= " FROM `$table` ";

	# 4° Parte da Query - Filtros
	if ($filters != null) {
		$query .= " WHERE ";
		foreach ($filters as $key => $value) {
			$query .= "`$key` = '$value' AND ";
		}

		# Removendo o ultimo AND que sobrou no fim da iteração
		$query = substr($query, 0, -4);
	}

	if ($extra != null) {
		$query .= $extra;
	}

	//echo $query;
	global $conn;

	$result = mysqli_query($conn, $query) or die(mysqli_error());

	if (!$result) {
		return false;
	}

	$data = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}

	return $data;
}

# UPDATE `table` SET field=newValue, ... WHERE `filtro` = 'valor' 
function update($table, $data, $filters){
	# 1º Parte 
	$query = "UPDATE `$table` SET ";

	# 2º Parte da query - Valores e Campos
	foreach ($data as $key => $value) {
		$query .= "`$key` = '$value', ";
	}

	# Removendo a ultima virgula remanescente
	$query = substr($query, 0, -2);

	# 3° Parte da Query - Filtros		
	$query .= " WHERE ";
	foreach ($filters as $key => $value) {
		$query .= "`$key` = '$value' AND ";
	}

	# Removendo o ultimo AND que sobrou no fim da iteração
	$query = substr($query, 0, -4);

	//echo $query;
	global $conn;

	$result = mysqli_query($conn, $query) or die(mysqli_error());

	return $result;
}

# DELETE FROM `table` WHERE `filtro` = 'valor' 
function delete($table, $filters){
	$query = "DELETE FROM `$table` ";

	# 3° Parte da Query - Filtros		
	$query .= " WHERE ";
	foreach ($filters as $key => $value) {
		$query .= "`$key` = '$value' AND ";
	}

	# Removendo o ultimo AND que sobrou no fim da iteração
	$query = substr($query, 0, -4);


	//echo $query;
	global $conn;

	$result = mysqli_query($conn, $query) or die(mysqli_error());

	return $result;
}
