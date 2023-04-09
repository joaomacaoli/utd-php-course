<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <title>Cadastro Clientes</title>
</head>

<body>
    <?php include_once 'components/navbar.php'; ?>

    <div class="container">
        <form action="createClient.php" method="POST">
            <fieldset>
                <legend>Novo cliente</legend>
                <div class="form-row">
                    <div class="col">
                        <label for="client_name">Nome</label>
                        <input type="text" id="client_name" name="client_name" class="form-control" placeholder="Digite o nome do fornecedor" required>
                    </div>
                    <div class="col">
                        <label for="client_email">Email</label>
                        <input type="email" id="client_email" name="client_email" class="form-control" placeholder="Digite seu email" required>
                    </div>
                    <div class="col">
                        <label for="client_adddress">Endereço</label>
                        <input type="text" id="client_adddress" name="client_adddress" class="form-control" placeholder="Digite seu endereço" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="client_cpf">CPF</label>
                        <input type="text" id="client_cpf" name="client_cpf" class="form-control" placeholder="Digite seu CPF" required min="1" maxlength="14" step="1">
                    </div>
                    <div class="col">
                        <label for="client_phone">Telefone</label>
                        <input type="text" id="client_phone" name="client_phone" class="form-control" placeholder="Digite seu telefone" required>
                    </div>
                    <div class="col">
                        <label for="client_type">Tipo</label>
                        <input type="text" id="client_type" name="client_type" class="form-control" placeholder="Selecione o tipo" required>
                    </div>
                    <div class="col">
                        <label for="client_password">Senha</label>
                        <input type="password" id="client_password" name="client_password" class="form-control" placeholder="Digite seu password" required>
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