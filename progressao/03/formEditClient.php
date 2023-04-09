<?php
require_once 'db/connect.php';
require_once 'db/functions.php';

if (isset($_GET['id'])) {
	$filter['id_client'] = $_GET['id'];
	$client = select("clients", null, $filter, " LIMIT 1")[0];
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
    <title>Cadastro de clientes</title>
</head>

<body>
    <?php include_once 'components/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="editClient.php" method="POST">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            Novo cliente
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="client_name">Nome</label>
                                    <input type="text" id="client_name" name="client_name" class="form-control" placeholder="Digite seu nome" required placeholder="Digite o nome" value="<?= $client['client_name']; ?>"><br>
                                </div>
                                <div class="col-md-4">
                                    <label for="client_email">Email</label>
                                    <input type="email" id="client_email" name="client_email" class="form-control" placeholder="Digite seu email" required placeholder="Digite o nome" value="<?= $client['client_email']; ?>"><br>
                                </div>
                                <div class="col-md-4">
                                    <label for="client_adddress">Endereço</label>
                                    <input type="text" id="client_adddress" name="client_adddress" class="form-control" placeholder="Digite seu endereço" required placeholder="Digite o nome" value="<?= $client['client_adddress']; ?>"><br>
                                </div>
                                <div class="col-md-4">
                                    <label for="client_cpf">CPF</label>
                                    <input type="text" id="client_cpf" name="client_cpf" class="form-control" placeholder="Digite seu CPF" required min="1" maxlength="14" step="1" placeholder="Digite o nome" value="<?= $client['client_cpf']; ?>"><br>
                                </div>
                                <div class="col-md-4">
                                    <label for="client_phone">Telefone</label>
                                    <input type="text" id="client_phone" name="client_phone" class="form-control" placeholder="Digite seu telefone" required placeholder="Digite o nome" value="<?= $client['client_phone']; ?>"><br>
                                </div>
                                <div class="col-md-4">
                                    <label for="client_type">Tipo</label>
                                    <input type="text" id="client_type" name="client_type" class="form-control" placeholder="Selecione o tipo" required placeholder="Digite o nome" value="<?= $client['client_type']; ?>"><br>
                                </div>
                                <div class="col-md-12" style="text-align: right;">
                                    <a href="listClients.php" class="btn btn-secondary"> Cancelar </a>
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