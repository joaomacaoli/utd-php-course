<?php

	ini_set("display_errors", true);

	session_start();

	if(!isset($_SESSION[md5("user_data")])){
		header("location: index.php?msg=Acesso Proibido");
	}	


	# Chamando a conexão com o banco de dados
	require_once 'connect.php';
	require_once 'functions.php';
	
	$products = select("products", null, null, " ORDER BY product_name");

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title> Lista de Produtos </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

</head>
<body>
	<?php include_once 'components/menu.php'; ?>
	
	<div class="container-fluid">	

	  <div class="row">	  	
	  	<div class="col-10 offset-1">
	  		<table class="table table-bordered border-primary" id="myTable">
	  			<thead class="text-center bg-dark text-white">
	  				<th> ID </th>
	  				<th> NOME </th>
	  				<th> CODIGO </th>
	  				<th> PREÇO </th>
	  				<th> ESTOQUE </th>
	  				<th> CADASTRADO EM: </th>
	  				<th> Ações </th>
	  			</thead>
	  			<tbody>
	  				
	  				<?php foreach($products as $product): ?>	  					
	  					<tr>
		  					<td width="5%" class="text-center"><?=$product['id_product'];?></td>
		  					<td><?=$product['product_name'];?></td>
		  					<td><?=$product['product_code'];?></td>
		  					<td><?=$product['product_price'];?></td>
		  					<td><?=$product['product_stock'];?></td>
		  					<td><?=$product['product_created_in'];?></td>

		  					<td>

		  						<a href="editaProduto.php?id=<?=$product['id_product'];?>" class="btn btn-warning btn-xs">
		  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
		  						</a>

		  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#deletar-<?=$product['id_product'];?>"> 
		  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
		  						</button>

		  						
		  						
		  						<!-- Modal -->
								<div class="modal fade" id="deletar-<?=$product['id_product'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <form action="excluir.php" method="POST">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body">
								        Deseja excluir o produto <strong><?=$product['product_name'];?></strong>? Essa alteração não pode ser desfeita!
								        <input type="hidden" name="id_product" value="<?=$product['id_product'];?>">
								        <input type="hidden" name="action" value="products">
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não, Sair!</button>
								        <button type="submit" class="btn btn-success">Sim, pode continuar !</button>
								      </div>
								    </div>
									</form>
								  </div>
								</div>


		  					</td>

	  					</tr>
	  				<?php endforeach; ?>

	  				
	  			</tbody>
	  			
	  		</table>
	  	</div>	  	
	  </div>
	</div>

	


	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	
	<!-- Bootstrap -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
	<!-- Icones -->
	<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>    
    
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <!-- Custom Script -->
	<script type="text/javascript">
		$(document).ready(function () {
		    $('#myTable').DataTable({
		    	"lengthMenu": [
		            [5,10, 25, 50, -1],
		            [5,10, 25, 50, 'All'],
		        ],

		    	"language": {
			        "sProcessing":    "Procesando...",
			        "sLengthMenu":    "Mostrar _MENU_ registros",
			        "sZeroRecords":   "Não se encontram resultados",
			        "sEmptyTable":    "Ningún dato disponible en esta tabla",
			        "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
			        "sInfoEmpty":     "Mostrando registros de 0 al 0 de un total de 0 registros",
			        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
			        "sInfoPostFix":   "",
			        "sSearch":        "Buscar:",
			        "sUrl":           "",
			        "sInfoThousands":  ",",
			        "sLoadingRecords": "Carregando...",
			        "oPaginate": {
			            "sFirst":    "Primero",
			            "sLast":    "Último",
			            "sNext":    "Seguinte",
			            "sPrevious": "Anterior"
			        },
			        "oAria": {
			            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			        }
			    }
		    });
		});
	</script>

</body>
</html>
