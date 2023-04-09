<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <title>Cadastro Fornecedores</title>
</head>

<body>
    <?php include_once 'components/navbar.php'; ?>

    <div class="container">
        <form action="createSupplier.php" method="POST">
            <fieldset>
                <legend>Novo fornecedor</legend>
                <div class="form-row">
                    <div class="col">
                        <label for="supplier_name">Nome</label>
                        <input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Digite o nome do fornecedor" required>
                    </div>
                    <div class="col">
                        <label for="supplier_cnpj">CNPJ</label>
                        <input type="text" id="supplier_cnpj" name="supplier_cnpj" class="form-control" placeholder="Digite seu CNPJ" required min="1" maxlength="14" step="1">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="supplier_corporate_name">Razão social</label>
                        <input type="text" id="supplier_corporate_name" name="supplier_corporate_name" class="form-control" placeholder="Digite a razão social da empresa" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col" style="text-align: right;">
                        <a href="listProducts.php" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>