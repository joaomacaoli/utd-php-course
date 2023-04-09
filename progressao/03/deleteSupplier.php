<?php
// ini_set("display_errors",1);

include_once 'db/connect.php';
include_once 'db/functions.php';

# Gravando os dados no banco
$filter['id_supplier'] = $_POST['id_supplier'];
$result = delete("suppliers", $filter);

if ($result) {
	header("location: listSuppliers.php");
} else {
	header("location: formCadSuppliers.php?mgs=error");
}
