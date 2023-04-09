<?php
require_once 'db/connect.php';
require_once 'db/functions.php';

if (isset($_GET['id'])) {
	$filter['id_supplier'] = $_GET['id'];
	$supplier = select("suppliers", null, $filter, " LIMIT 1")[0];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <title>Cadastro de fornecedores</title>
</head>

<body>
    <?php include_once 'components/navbar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="editSupplier.php" method="POST">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            Novo fornecedor
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="supplier_name">Nome</label>
                                    <input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Digite o nome do fornecedor" value="<?= $supplier['supplier_name']; ?>"required><br>
                                </div>
                                <div class="col-md-6">
                                    <label for="supplier_cnpj">CNPJ</label>
                                    <input type="text" id="supplier_cnpj" name="supplier_cnpj" class="form-control" placeholder="Digite seu CNPJ" required min="1" maxlength="14" step="1" value="<?= $supplier['supplier_cnpj']; ?>"><br>
                                </div>
                                <div class="col-md-12">
                                    <label for="supplier_corporate_name">Razão social</label>
                                    <input type="text" id="supplier_corporate_name" name="supplier_corporate_name" class="form-control" placeholder="Digite a razão social da empresa" value="<?= $supplier['supplier_corporate_name']; ?>" required><br>
                                </div>
								<input type="hidden" name="id_supplier" value="<?= $supplier['id_supplier']; ?>">
                                <div class="col-md-12" style="text-align: right;">
                                    <a href="listSuppliers.php" class="btn btn-secondary"> Cancelar </a>
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