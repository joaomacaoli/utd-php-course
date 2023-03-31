<?php # Crie um algoritmo onde sejam digitados 10 números e exiba-os na ordem crescente. ?>
<!DOCTYPE html>
<html>
<head>
	<title> Gerador de Parcelas </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<hr>
	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="" method="POST">
				<div class="card">
				  <div class="card-header">
				    Gerador de Parcelas
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				
				    	<div class="col-md-8">
		  					<label> Valor do Produto: <span class="text-danger">*</span> </label><br>
							<input type="text" name="valor" class="form-control" required placeholder="Valor do Produto"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Quantidade de Parcelas: <span class="text-danger">*</span></label><br>
							<input type="number" name="parcelas" class="form-control" required placeholder="Nº de Parcelas"><br>
		  				</div>

		  				<div class="col-md-12">
				    		<button type="submit" class="btn btn-success"> Enviar Dados </button>
				    	</div>
				    	
		  			</div>	

				  </div>
				</div>
			</form>
	  	</div>	  	
	  </div>
	</div>
	
<?php

	if(isset($_POST['valor'])){
		
		# calculando o valor das parcelas
		$valorParcela = round($_POST['valor']/$_POST['parcelas'], 2);
		
		$mesAtual = 3+1;
		$anoAtual = 2023;
	
?>
	<div class="container-fluid">
		<hr>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<table class="table table-hover table-striped table-bordered text-center">
					<thead>
						<th> Parcela </th>
						<th> Valor </th>
						<th> Data de Vencimento </th>
						<th> Imprimir </th>
					</thead>
					<tbody>
						<?php for($p=1;$p<=$_POST['parcelas'];$p++): ?>
							<tr>
								<?php if($mesAtual > 12): ?>
									<?php $mesAtual = 1; $anoAtual++; ?>
										<td><?=$p;?>º</td>
										<td>R$ <?=$valorParcela;?></td>
										<td><?=($mesAtual++)."/".$anoAtual;?></td>
										<td><button class="btn btn-xs btn-warning"> <span class="iconify" data-icon="material-symbols:barcode"></span> Imprimir </button></td>
								<?php else: ?>
									<td><?=$p;?>º</td>
									<td>R$ <?=$valorParcela;?></td>
									<td><?=($mesAtual++)."/".$anoAtual;?></td>
									<td><button class="btn btn-xs btn-warning"> <span class="iconify" data-icon="material-symbols:barcode"></span> Imprimir </button></td>
								<?php endif; ?>
							</tr>
						<?php endfor; ?>
					</tbody>
				</table>

			</div>	
		</div>

	</div>
	<?php } ?>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>
</html>
