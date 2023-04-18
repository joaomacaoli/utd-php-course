<h1 class="h3 mb-4 text-gray-800"><?=$titlePage;?></h1>
         
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
                            <th>ID</th>
                            <th>Nome do Produto</th>
                            <th>Codigo</th>
                            <th>Preço</th>
                            <th>Estoque</th>                            
                            <th>Data de Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach($products as $p): ?>    
                            <tr>
                                <td><?=$p['id_product'];?></td>
                                <td><?=$p['product_name'];?></td>
                                <td><?=$p['product_code'];?></td>
                                <td><?=$p['product_price'];?></td>
                                <td><?=$p['product_stock'];?></td>
                                <td><?=$p['product_created_in'];?></td>
                                <td>AÇÇOES </td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
