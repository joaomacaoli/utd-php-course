<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

	<title> Gerador de Tabelas </title>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-6 offset-md-3">
				<div class="card">
				  <div class="card-header">
				    Tabelas Generator&reg;
				  </div>
				  <div class="card-body">
				    <form action="#" method="POST">
				    	<div class="row">
				    		<div class="col-md-6">
				    			<div class="col-auto">
								    <label class="visually-hidden" for="autoSizingInputGroup">Linhas</label>
								    <div class="input-group">
								      <div class="input-group-text"><span class="iconify" data-icon="material-symbols:table-rows-narrow"></span></div>
								      <input type="number" min=0 required name="linhas" class="form-control" id="autoSizingInputGroup" placeholder="LINHAS">
								    </div>
								</div>
				    		</div>

				    		<div class="col-md-6">
				    			<div class="col-auto">
								    <label class="visually-hidden" for="autoSizingInputGroup">Colunas</label>
								    <div class="input-group">
								      <div class="input-group-text"><span class="iconify" data-icon="iconoir:view-columns-3"></span></div>
								      <input type="number" name="colunas" min=0 required class="form-control" id="autoSizingInputGroup" placeholder="COLUNAS">
								    </div>
								</div>
				    		</div>

				    		<div class="col-md-12 text-end">
				    			<hr>
				    			<button class="btn btn-primary">
				    				<span class="iconify" data-icon="material-symbols:table-chart-outline"></span> Gerar Tabela
				    			</button>
				    		</div>
				    	</div>
				    </form>
				  </div>
				</div>
			</div>
		</div>	
	</div>

	<?php 
		
		# Testando se existe algum post preenchido
		if(isset($_POST['linhas'])){

			$linhas = $_POST['linhas'];
			$colunas = $_POST['colunas'];
	?>	
			<div class="container-fluid col-md-10 offset-md-1">
				<table class="table table-hover table-bordered table-striped">
					<?php for($l=1;$l<=$linhas;$l++): ?>
						<tr class="text-cente"r>
							<?php for($c=1;$c<=$colunas;$c++): ?>
								<td><?=rand(0,25);?></td>
							<?php endfor; ?>	
						</tr>
					<?php endfor; ?>
				</table>
			</div>

	<?php  } else { ?>		
		<div class="col-md-6 offset-md-3">
			<hr>
			<div class="alert alert-warning" role="alert">
			  Entre com os dados para gerar a tabela!
			</div>
		</div>
	<?php } ?>	

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