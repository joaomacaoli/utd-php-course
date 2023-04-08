<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Cadastro Produtos</title>
</head>

<body>
    <?php include_once 'components/navbar.php'; ?>

    <div class="container">
        <form action="createProduct.php" method="POST">
            <fieldset>
                <legend>Cadastro de Produtos</legend>
                <div class="form-row">
                    <div class="col">
                        <label for="product_name">Nome</label>
                        <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Digite o nome do produto" required>
                    </div>
                    <div class="col">
                        <label for="product_code">Código</label>
                        <input type="text" id="product_code" name="product_code" class="form-control" placeholder="Digite o código" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="product_stock">Estoque</label>
                        <input type="number" id="product_stock" name="product_stock" class="form-control" placeholder="Digite a quantidade em estoque" required min="1" step="1">
                    </div>
                    <div class="col">
                        <label for="product_price">Preço</label>
                        <input type="number" id="product_price" name="product_price" class="form-control" placeholder="Digite o preço" required min="0.01" step="0.01">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col text-right">
                        <a href="listProducts.php" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>