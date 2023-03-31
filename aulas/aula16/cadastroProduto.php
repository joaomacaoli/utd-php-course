<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include_once 'components/menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="grava.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Cadastro de Produto
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-8">
		  					<label> Nome Produto: <span class="text-danger">*</span> </label><br>
							<input type="text" name="product_name" class="form-control" required placeholder="Digite o nome"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Código: <span class="text-danger">*</span></label><br>
							<input type="text" name="product_code" class="form-control" required placeholder="Digite o Código" maxlength="12"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Preço: <span class="text-danger">*</span> </label><br>
							<input type="text" name="product_price" class="form-control" required placeholder="Digite o Preço"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Estoque: <span class="text-danger">*</span></label><br>
							<input type="number" min=0 step=1 name="product_stock" class="form-control" required placeholder="Digite o Estoque"><br>
		  				</div>
									  				
			  							    	
		  				
				    	<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Enviar Dados </button>
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