<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastro Produtos</title>
</head>

<body>

    <?php require_once('navbar.php'); ?>

    <div class="container">
        <form action="createProducts.php" method="POST">
            <fieldset>
                <legend>Cadastro de Produtos</legend>
                <div class="form-row">
                    <div class="col">
                        <label for="formName">Nome</label>
                        <input type="text" id="formName" name="formName" class="form-control" placeholder="Digite o nome do produto" required>
                    </div>
                    <div class="col">
                        <label for="formCod">Código</label>
                        <input type="text" id="formCod" name="formCod" class="form-control" placeholder="Digite o código" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="formStock">Estoque</label>
                        <input type="number" id="formStock" name="formStock" class="form-control" placeholder="Digite a quantidade em estoque" required min="1" step="1">
                    </div>
                    <div class="col">
                        <label for="formPrice">Preço</label>
                        <input type="number" id="formPrice" name="formPrice" class="form-control" placeholder="Digite o preço" required min="0.01" step="0.01">
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