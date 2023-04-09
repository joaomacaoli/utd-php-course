<?php
require_once 'db/connect.php';
require_once 'db/functions.php';

if (isset($_GET['id'])) {
	$filter['id_product'] = $_GET['id'];
	$product = select("products", null, $filter, " LIMIT 1")[0];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<title> Edição de fornecedores </title>
</head>

<body>

	<?php include_once 'components/navbar.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-8 offset-2">
				<form action="editProduct.php" method="POST">
					<div class="card">
						<div class="card-header bg-dark text-white">
							Editar produto
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-8">
									<label> Nome Produto: <span class="text-danger">*</span> </label><br>
									<input type="text" name="product_name" class="form-control" required placeholder="Digite o nome" value="<?= $product['product_name']; ?>"><br>
								</div>
								<div class="col-md-4">
									<label> Código: <span class="text-danger">*</span></label><br>
									<input type="text" name="product_code" class="form-control" required placeholder="Digite o Código" maxlength="12" value="<?= $product['product_code']; ?>"><br>
								</div>
								<div class="col-md-6">
									<label> Estoque: <span class="text-danger">*</span></label><br>
									<input type="number" min=1 step=1 name="product_stock" class="form-control" required placeholder="Digite o Estoque" value="<?= $product['product_stock']; ?>"><br>
								</div>
								<div class="col-md-6">
									<label> Preço: <span class="text-danger">*</span> </label><br>
									<input type="text" name="product_price" class="form-control" required placeholder="Digite o Preço" value="<?= $product['product_price']; ?>"><br>
								</div>
								<input type="hidden" name="id_product" value="<?= $product['id_product']; ?>">
								<div class="col-md-12" style="text-align: right;">
									<a href="listProducts.php" class="btn btn-secondary"> Cancelar </a>
									<button type="submit" class="btn btn-primary"> Salvar </button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>