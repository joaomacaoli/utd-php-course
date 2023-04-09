<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <title>Cadastro de produtos</title>
</head>

<body>
    <?php include_once 'components/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="createProduct.php" method="POST">
                    <div class="card">
                        <div class="card-header">
                            Novo produto
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="product_name">Nome</label>
                                    <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Digite o nome do produto" required><br>
                                </div>
                                <div class="col-md-4">
                                    <label for="product_code">Código</label>
                                    <input type="text" id="product_code" name="product_code" class="form-control" placeholder="Digite o código" required><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="product_stock">Estoque</label>
                                    <input type="number" id="product_stock" name="product_stock" class="form-control" placeholder="Digite a quantidade em estoque" required min="1" step="1"><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="product_price">Preço</label>
                                    <input type="number" id="product_price" name="product_price" class="form-control" placeholder="Digite o preço" required min="0.01" step="0.01"><br>
                                </div>
                                <div class="col-md-12" style="text-align: right;">
                                    <a href="listProducts.php" class="btn btn-secondary"> Cancelar </a>
                                    <button type="submit" class="btn btn-primary"> Salvar </button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>