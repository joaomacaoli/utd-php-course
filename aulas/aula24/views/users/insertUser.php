<h1 class="h3 mb-4 text-gray-800"><?=$titlePage;?></h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Dados de Inserção de Usuário</h6>
    </div>

    <div class="card-body">
        <form action="<?=$GLOBALS['urlBase'];?>/controllers/user.php" method="POST">
            <div class="form-group row">

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Nome de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_name"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Email de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_email"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> CPF </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_cpf"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Telefone de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_phone"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Endereço de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_adddress"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Tipo de Usuário </label>
                    <select class="form-control form-control-user" name="user_type">
                        <option>ADMIN</option>
                        <option>OPERADOR</option>
                        <option>CLIENTE</option>
                    </select>
                    <br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Senha do Usuário </label>
                    <input type="password" required class="form-control form-control-user" id="exampleFirstName" placeholder="**********" name="user_password"><br>
                    <br>
                </div>

                <input type="hidden" value="insert" name="action">

                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Salvar os Dados</span>
                    </button>
                </div>


            </div>
        </form>
    </div>
</div>