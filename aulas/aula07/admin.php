<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title> Lista de Clientes </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark" style="color: white !important">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"> TABELA DO PODER </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="formulario.html">Cadastro</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="tabela.html">Lista de Clientes</a>
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
	  	<div class="col-10 offset-1">
	  		<table class="table table-bordered border-primary" id="myTable">
	  			<thead class="text-center bg-dark text-white">
	  				<th> Nome Completo </th>
	  				<th> Email </th>
	  				<th> Telefone </th>
	  				<th> Endereço </th>
	  				<th> Nº de Compras </th>
	  				<th> Ações </th>
	  			</thead>
	  			<tbody>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  				<tr>
	  					<td> Anthony </td>
	  					<td> anthony@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 15 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Maria </td>
	  					<td> Maria@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 9 </td>
	  					<td>
	  						<button class="btn btn-outline-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-outline-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-outline-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> João </td>
	  					<td> joão@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 45 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>

	  				<tr>
	  					<td> Fatima </td>
	  					<td> fatima@email.com </td>
	  					<td> (85) 999544262 </td>
	  					<td> Rua Bem Ali </td>
	  					<td> 3 </td>
	  					<td>
	  						<button class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
	  							<span class="iconify" data-icon="mdi:trash-can-empty"  data-width="25" data-height="25"></span>
	  						</button>

	  						<button class="btn btn-warning btn-xs">
	  							<span class="iconify" data-icon="mdi:lead-pencil" data-width="25" data-height="25"></span>
	  						</button>
	  						
	  						<button class="btn btn-primary btn-xs">
	  							<span class="iconify" data-icon="mdi:eye-circle" data-width="25" data-height="25"></span>
	  						</button>
	  					</td>
	  				</tr>
	  			</tbody>
	  			<tfoot class="text-center">
	  				<th> Nome Completo </th>
	  				<th> Email </th>
	  				<th> Telefone </th>
	  				<th> Endereço </th>
	  				<th> Nº de Compras </th>
	  				<th> Ações </th>
	  			</tfoot>
	  		</table>
	  	</div>	  	
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    
	    <div class="modal-content">
	      <div class="modal-header">
	        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Registro?</h1>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        Deseja excluir esse registro? Essa alteração não pode ser desfeita!
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não, Sair!</button>
	        <a href="https://google.com" type="button" class="btn btn-success">Sim, pode continuar !</a>
	      </div>
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


