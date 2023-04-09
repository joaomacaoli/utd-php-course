<?php
// ini_set("display_errors",1);

include_once 'db/connect.php';
include_once 'db/functions.php';

# Gravando os dados no banco
$filter['id_client'] = $_POST['id_client'];
$result = delete("clients", $filter);

if ($result) {
	header("location: listClients.php");
} else {
	header("location: formCadClients.php?mgs=error");
}
