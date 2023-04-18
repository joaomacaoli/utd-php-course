<?=$this->section('content');?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de Usuários - Contratos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Lista </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Tabela de resultados -->
        <div class="card">
              <div class="card-header bg-gradient-secondary">
                <div class="row">
                  <div class="col-md-6"><h3 class="card-title">Lista de Usuários</h3></div>
                  <div class="col-md-6 text-right" style="margin-bottom: -20px;"><p>
                    <a class="btn btn-success btn-sm" href="<?=base_url();?>/usuarios/adicionar" class="btn btn-default"><i class="fa fa-plus-square"> </i> Adicionar </a></p></div>
                </div>                

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <?php //$filiais = ["010119"=>"JABOTI", "010128"=>"BELEM CENTRO", "010129"=>"BELEM BR"]; ?>
                <div class="row"><hr></div>

                <table id="example1" class="table table-bordered table-striped tableusers table-sm" style="font-size: 12px !important">
                  <thead class="bg-olive">
                  <tr class="text-center">                    
                     <th>ID</th>
                     <th>NOME</th>
                     <th>LOGIN</th>
                     <th>EMAIL</th>
                     <th>FILIAL</th>
                     <th>SENHA</th>
                     <th>FUNCAO</th>
                     <th>CRIADO EM</th>
                     <th>AÇÔES</th>
                  </tr>
                  </thead>
                   <tbody class=""> 
                      <?php  foreach ($result as $key => $value): ?>                          
                          <tr>                            
                             <td><?=$value['ID_USER'];?></td>
                             <td><?=$value['USER_NAME'];?></td>
                             <td><?=$value['USER_LOGIN'];?></td>
                             <td><?=$value['USER_EMAIL'];?></td>
                             <td><?=($value['USER_FILIAL'] == NULL or $value['USER_FILIAL'] == '(NULL)') ? "TODAS" : $value['USER_FILIAL'] ;?></td>
                             <td><?=$value['USER_PASSWORD'];?></td>
                             <td><?=($value['USER_FUNCTIONS'] == 0) ? "OPERADOR" : "ADMIN/SUPERVISOR";?></td>
                             <td><?=$value['USER_CREATED']?></td>
                             <td>
                               <a class="btn btn-warning btn-xs" href="<?=base_url();?>/usuarios/editar/<?=$value['ID_USER'];?>" class="btn btn-default"><i class="fa fa-edit"> </i> </a>
                             </td>
                          </tr>
                      <?php  endforeach; ?>
                   </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
        </div>
      </div>
    
    </section>
    <!-- /.content -->
<?=$this->endSection(); ?>