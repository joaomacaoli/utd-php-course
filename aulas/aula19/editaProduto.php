<?php 
	
	session_start();

	if(!isset($_SESSION[md5("user_data")])){
		header("location: index.php?msg=Acesso Proibido");
	}
	
	require_once 'connect.php';
	require_once 'functions.php';

	if(isset($_GET['id'])){
		$filter['id_product'] = $_GET['id'];
		$product = select("products", null, $filter, " LIMIT 1")[0];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Edição </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<?php include_once 'components/menu.php'; ?>

	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="editar.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Edição de Produto
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-8">
		  					<label> Nome Produto: <span class="text-danger">*</span> </label><br>
							<input type="text" name="product_name" class="form-control" required placeholder="Digite o nome" value="<?=$product['product_name'];?>"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Código: <span class="text-danger">*</span></label><br>
							<input type="text" name="product_code" class="form-control" required placeholder="Digite o Código" maxlength="12" value="<?=$product['product_code'];?>"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Preço: <span class="text-danger">*</span> </label><br>
							<input type="text" name="product_price" class="form-control" required placeholder="Digite o Preço" value="<?=$product['product_price'];?>"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Estoque: <span class="text-danger">*</span></label><br>
							<input type="number" min=0 step=1 name="product_stock" class="form-control" required placeholder="Digite o Estoque" value="<?=$product['product_stock'];?>"><br>
		  				</div>
						
						<input type="hidden" name="id_product" value="<?=$product['id_product'];?>">
		  				
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