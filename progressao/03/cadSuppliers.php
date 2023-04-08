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
        <form action="createSuppliers.php" method="POST">
            <fieldset>
                <legend>Cadastro de Fornedores</legend>
                <div class="form-row">
                    <div class="col">
                        <label for="formName">Nome</label>
                        <input type="text" id="formName" name="formName" class="form-control" placeholder="Digite o nome do fornecedor" required>
                    </div>
                    <div class="col">
                        <label for="formCNPJ">CNPJ</label>
                        <input type="number" id="formCNPJ" name="formCNPJ" class="form-control" placeholder="Digite a quantidade em estoque" required min="1" maxlength="3" step="1">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="formSocial">Razão social</label>
                        <input type="text" id="formSocial" name="formSocial" class="form-control" placeholder="Digite o código" required>
                    </div>
                    <div class="col">
                        <label for="formRegistrationDate">Data de cadastro</label>
                        <input type="date" id="formRegistrationDate" name="formRegistrationDate" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col" style="text-align: right;">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

</body>

</html>