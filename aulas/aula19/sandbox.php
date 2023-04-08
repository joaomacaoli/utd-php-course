<?php  

		
	switch($_GET['test']){
		
		case "1":
			echo "Link para o google: <a href='https://google.com.br'> Google </a> <br>"; 
		break;	

		case "2":
			echo "Link para o bing: <a href='https://bing.com.br'> BING </a> <br>";
		break;	

		case "3":
			echo "Link para o Yahoo: <a href='https://yahoo.com.br'> Yahoo </a> <br>";
		break;	

		case "4":
			echo "Link para o DuckDuck GO: <a href='https://ddg.gg'> DuckDuck Go </a> <br>";
		break;

		default:
			echo "Opção inválida";	

	}




?>