<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	
	<hr>
	<div class="container-fluid">
	  <div class="row">	  	
	  	<div class="col-8 offset-2">
	  		<form action="recebe.php" method="POST">
				<div class="card">
				  <div class="card-header">
				    Formulário
				  </div>
				  <div class="card-body">
				    <div class="row">
		  				<div class="col-md-8">
		  					<label> Nome Completo: <span class="text-danger">*</span> </label><br>
							<input type="text" name="nomeCompleto" class="form-control" required placeholder="Digite seu nome"><br>
		  				</div>

		  				<div class="col-md-4">
		  					<label> Data de Nascimento: <span class="text-danger">*</span></label><br>
							<input type="date" name="dtNasc" class="form-control" required placeholder="Digite seu email"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Email: <span class="text-danger">*</span> </label><br>
							<input type="email" name="email" class="form-control" required placeholder="Digite seu email"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Endereço: <span class="text-danger">*</span></label><br>
							<input type="text" name="endereco" class="form-control" required placeholder="Digite seu Endereço"><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Digite sua senha: <span class="text-danger">*</span></label><br>
							<input type="password" name="senha" class="form-control" required placeholder="Digite seu Endereço" ><br>
		  				</div>

		  				<div class="col-md-6">
		  					<label> Confirme sua senha: <span class="text-danger">*</span></label><br>
							<input type="password" name="confSenha" class="form-control" required placeholder="Digite seu Endereço"><br>
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
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>