<!DOCTYPE html>
<html>
<head>
	<title> Formulario de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark" style="color: white !important;background-color: #ff9b0094 !important;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"> TABELA DO PODER </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="cadastro.php">Cadastro</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="lista.php">Lista de Clientes</a>
	        </li>
	        <!-- <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Dropdown
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="#">Action</a></li>
	            <li><a class="dropdown-item" href="#">Another action</a></li>
	            <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li>
	          </ul>
	        </li> -->
	        
	      </ul>
	      
	    </div>
	  </div>
	</nav>
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
		  					<label> CPF: <span class="text-danger">*</span></label><br>
							<input type="text" name="cpf" class="form-control" required placeholder="Digite seu CPF"><br>
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