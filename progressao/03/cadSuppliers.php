<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Cadastro Fornecedores</title>
</head>

<body>
    <?php include_once 'components/navbar.php'; ?>

    <div class="container">
        <form action="createSupplier.php" method="POST">
            <fieldset>
                <legend>Cadastro de Fornedores</legend>
                <div class="form-row">
                    <div class="col">
                        <label for="supplier_name">Nome</label>
                        <input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Digite o nome do fornecedor" required>
                    </div>
                    <div class="col">
                        <label for="supplier_cnpj">CNPJ</label>
                        <input type="text" id="supplier_cnpj" name="supplier_cnpj" class="form-control" placeholder="Digite a quantidade em estoque" required min="1" maxlength="14" step="1">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="supplier_corporate_name">Razão social</label>
                        <input type="text" id="supplier_corporate_name" name="supplier_corporate_name" class="form-control" placeholder="Digite o código" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col" style="text-align: right;">
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