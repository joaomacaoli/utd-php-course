<?php 

	# Start session
	session_start();

	# Destroy Session
	session_destroy();

	# Redirect
	header("location: index.php?msg=Sessão Encerrada");


?>