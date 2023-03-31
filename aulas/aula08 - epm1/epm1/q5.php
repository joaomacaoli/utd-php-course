<?php
	
	# MODO 1
	$dezenas = array();
	
	for ($n=1; $n < 7;$n++) { 
		# Gerando um numero randomico 
		$numero = rand(1,60);

		if($n == 1){
			$dezenas[$numero] = $numero;
		}else{

			while(isset($dezenas[$numero])){
				$numero = rand(1,60);
			}

			$dezenas[$numero] = $numero;
		}
	}
	
	asort($dezenas);
	
	
	/*
	# MODO 2 
	$dezenas = [];
	$qtdDezenas = 0;
	
	# Fazendo a inserção da primeira dezena, independentemente da quantidade
	do {

		# Gerando uma nova dezena
		$dezena = rand(1, 60);
		
		# Variável de controle de inserção
		$podeInserir = true;
		
		# Verificando se a dezena já existe no array 
		for($c = 0; $c < count($dezenas); $c++){
			
			# Teste pra saber se a dezena na posição do array já existe e se existe, não pode inserir
			if( $dezenas[$c] == $dezena ){
				$podeInserir = false;
			}
		}
		
		# Se passou pela verificação de duplicatas, então, a dezena pode ser inserida nas dezenas...
		if( $podeInserir ){
			$dezenas[] = $dezena; # Inseriu a dezena no array de dezenas
			$qtdDezenas++; # incrementa a variável de controle de quantidade
		}
		
		
	} while($qtdDezenas <= 5);
	*/
?>

<!DOCTYPE html>
<html>
<head>
	<title> Gerador de números da Sena </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<hr>
	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="" method="POST">
				<div class="card">
				  <div class="card-header">
				    Gerador de números da Mega Sena
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<?php foreach($dezenas as $d): ?>
			  				<div class="col-md-2">		  					
								<button type="submit" class="btn btn-success"> <?=($d<10)? '0'.$d : $d; ?> </button>
			  				</div>
		  				<?php endforeach; ?>
		  				

				    	<div class="col-md-12">
				    		<hr>
				    		<button type="submit" class="btn btn-success"> Gerar novos números </button>
				    	</div>
		  			</div>	

				  </div>
				</div>
			</form>
	  	</div>	  	
	  </div>
	</div>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
