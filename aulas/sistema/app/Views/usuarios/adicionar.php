<?=$this->section('content');?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Adicionar Usuário </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Usuarios </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-olive">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-file"></i> Dados do Usuário </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="<?=base_url();?>/UsuariosController/save" method="POST" enctype="multipart/form-data">
            <div class="card-body row">
              <div class="form-group col-md-4">
                <label for="inputName">Nome</label>
                <input type="text" id="inputName" required name="USER_NAME" class="form-control" placeholder="Nome Completo">
              </div>

              <div class="form-group col-md-4">
                <label for="inputName">Filial</label>
                <select class="form-control" name="USER_FILIAL" required>
                    <option disabled selected> -- SELECIONE A FILIAL -- </option>
                    <option  value="(NULL)"> TODAS AS FILIAIS </option>
                    <?php foreach ($filiais as $f): ?>
                      <option value="<?=$f['UO_FILIAL'];?>"><?=$f['UO_DESC'];?></option>
                    <?php endforeach; ?>
                </select>
              </div>

              
              <div class="form-group col-md-4">
                <label for="inputName">Login </label> <small class="text-danger font-weight-bolder"> (usar "nome.sobrenome") </small>
                <input type="text" id="inputName" required name="USER_LOGIN" class="form-control" placeholder="nome.sobrenome">
              </div>

              <div class="form-group col-md-4">
                <label for="inputName">Email</label>
                <input type="text" id="inputName" required name="USER_EMAIL" class="form-control" placeholder="@casafreitas.com">
              </div>

              <div class="form-group col-md-4">
                <label for="inputName">Senha</label><small class="text-danger font-weight-bolder"> (Senha Padrão: cf@2022 já preenchida )</small>
                <input type="password" id="inputName" required name="USER_PASSWORD" class="form-control" placeholder="********" value="cf@2022">
              </div>

              <div class="form-group col-md-4">
                <label for="inputName">Tipo Usuário</label>
                <select name="USER_FUNCTIONS" class="form-control">
                  <option value="0"> OPERADOR </option>
                  <option value="1"> SUPERVISOR </option>
                  <option value="1"> ADMINISTRADOR </option>
                </select>
              </div>  


              <div class="form-group col-md-4">
                <label for="inputName">Setor</label>
                <select name="USER_SETOR" class="form-control">
                  <?php foreach($setores as $s): ?>
                    <option value="<?=$s['id_setor'];?>"><?=$s['setor_nome'];?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group col-md-12">
                <p class="text-right"><input type="submit" value="Salvar o Usuario" class="btn btn-success float-right"></p>
              </div>
            </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>        
      </div>
      
    </section>

    <!-- /.content -->
<?=$this->endSection(); ?>