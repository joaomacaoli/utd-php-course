<?php # Crie um algoritmo onde sejam digitados 10 números e exiba-os na ordem crescente. ?>
<!DOCTYPE html>
<html>
<head>
	<title> Ordenação de Números </title>
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
				    Ordenador de Números
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				
				    	<?php if(!isset($_POST['numeros'])): ?>
			  				<?php for($i=0;$i<11;$i++): ?>
				  				<div class="col-md-2" style="padding: 5px;">		  					
									<input type="text" class="btn btn-success" value="<?=rand(0,9999); ?>" name="numeros[]" size="10"> 
				  				</div>
			  				<?php endfor; ?>
			  				<div class="col-md-12">
					    		<hr>
					    		<button type="submit" class="btn btn-success"> Enviar para ordenar! </button>
					    	</div>
			  			<?php else: ?>
			  				<?php foreach($_POST['numeros'] as $n): ?>
				  				<div class="col-md-2" style="padding: 5px;">		  					
									<input type="text" class="btn btn-success" value="<?=$n;?>" size="10"> 
				  				</div>
			  				<?php endforeach; ?>
			  				<div class="col-md-12">
					    		<hr>
					    		<a href="q1.php" class="btn btn-success"> Gerar novos números! </a>
					    	</div>		
		  				<?php endif; ?>		  				

				    	
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

<?php

	if(isset($_POST['numeros'])){
		$array = $_POST['numeros'];

		
	    /*$n = count($array); # Elementos do Array
	    $posicao = null; # Controlador de posição
	    $valorTemp = null; # Valor auxiliar
	 
	    for($i=0; $i<$n-1; $i++){
	 		
	 		# Guarda a posição atual
	        $posicao=$i;
	        
	        for($j=$i+1; $j<$n; $j++){
	            
	            # Testa se a posição+1 no array é menor que o valor na posição atual 
	            if( $array[$j]<$array[$posicao] ){
	                $posicao=$j; # Se for, a posição assume o valor do laço interno (j)
	            }
	        }
	 		
	 		# Aqui é onde as posições são alteradas
	        $valorTemp = $array[$i]; // Valor atual do array
	        $array[$i] = $array[$posicao]; # 
	        $array[$posicao] = $valorTemp; 
	    }*/

	    asort( $array );

	 	echo "<pre>";
	    print_r( $array );
	}

	//print_r(selectionSort());