<?php

include_once 'connect.php';
include_once 'functions.php';

# Gravando os dados no banco
$filter['id_product'] = $_POST['id_product'];
$result = delete("products", $filter);

if ($result) {
	header("location: listaProdutos.php");
} else {
	header("location: cadastroProduto.php?mgs=error");
}
