<h1 class="h3 mb-4 text-gray-800"><?=$titlePage;?></h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">Dados de Edição de Usuário</h6>
    </div>

    <div class="card-body">
        <form action="<?=$GLOBALS['urlBase'];?>/controllers/user.php" method="POST">
            <div class="form-group row">

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Nome de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_name" value="<?=$user['user_name'];?>"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Email de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_email" value="<?=$user['user_email'];?>"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> CPF </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_cpf" value="<?=$user['user_cpf'];?>"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Telefone de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_phone" value="<?=$user['user_phone'];?>"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Endereço de Usuário </label>
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Digite os dados!" required name="user_adddress" value="<?=$user['user_adddress'];?>"><br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Tipo de Usuário </label>
                    <select class="form-control form-control-user" name="user_type">
                        <option <?=($user['user_type'] == "ADMIN") ? "selected" : "" ;?>>ADMIN</option>
                        <option <?=($user['user_type'] == "OPERADOR") ? "selected" : "" ;?>>OPERADOR</option>
                        <option <?=($user['user_type'] == "CLIENTE") ? "selected" : "" ;?>>CLIENTE</option>
                    </select>
                    <br>
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Senha do Usuário <small class="text-danger"> Deixe em branco caso nao queira alterar! </small></label>
                    <input type="password" class="form-control form-control-user" id="exampleFirstName" placeholder="**********" name="user_password" autocomplete="off"><br>
                    <br>
                </div>

                <input type="hidden" value="update" name="action">
                <input type="hidden" value="<?=$user['id_user'];?>" name="id_user">

                <div class="col-sm-12 text-right">
                    <button type="submit" class="btn btn-warning btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Editar os Dados</span>
                    </button>
                </div>


            </div>
        </form>
    </div>
</div>