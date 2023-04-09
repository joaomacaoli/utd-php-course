<?php
// ini_set("display_errors",1);

include_once 'db/connect.php';
include_once 'db/functions.php';

# Gravando os dados no banco
$filter['id_product'] = $_POST['id_product'];
$result = delete("products", $filter);

if ($result) {
	header("location: listProducts.php");
} else {
	header("location: formCadProducts.php?mgs=error");
}
