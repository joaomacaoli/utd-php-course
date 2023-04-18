<h1 class="h3 mb-4 text-gray-800"><?=$titlePage;?></h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>
           
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                            <th>Tipo</th>
                            <th>Data de Cadastro</th>
                            <th> Ações </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach($users as $u): ?>    
                            <tr>
                                <td><?=$u['user_name'];?></td>
                                <td><?=$u['user_email'];?></td>
                                <td><?=$u['user_cpf'];?></td>
                                <td><?=$u['user_phone'];?></td>
                                <td><?=$u['user_adddress'];?></td>
                                <td><?=$u['user_type'];?></td>
                                <td><?=$u['user_created_in'];?></td>
                                <td>
                                    <a href="?option=updateUser&id=<?=base64_encode($u['id_user']);?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteUser-<?=$u['id_user'];?>">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <!-- Logout Modal-->
                                    <div class="modal fade" id="deleteUser-<?=$u['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <form action="<?=$GLOBALS['urlBase'];?>/controllers/user.php" method="POST">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Tem certeza que deseja excluir o usuário <strong><?=$u['user_name'];?>? Essa operação não pode ser desfeita.</strong></div>

                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="id_user" value="<?=$u['id_user'];?>">
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                    <button class="btn btn-danger" type="submit">Excluir</a>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
