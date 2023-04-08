<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark" style="color: white !important;background-color: #ff9b0094 !important;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"> TABELA DO PODER </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Cadastros
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="cadastroProduto.php">Produtos</a></li>
	            <li><a class="dropdown-item" href="cadastroCliente.php">Clientes</a></li>
	            <!-- <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
	          </ul>
	        </li>
	        
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Listagens
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="ListaProdutos.php">Produtos</a></li>
	            <li><a class="dropdown-item" href="ListaClientes.php">Clientes</a></li>
	            <!-- <li><hr class="dropdown-divider"></li>
	            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
	          </ul>
	        </li>	
	      </ul>
	      
	      <span class="navbar-text">
	       Bem vindo(a), <?=$_SESSION[md5("user_data")]['user_name'];?>
	       &nbsp;&nbsp;&nbsp;
	       <a class="btn btn-xs btn-primary" href="logout.php"> 
	       	<span class="iconify" data-icon="fa6-solid:power-off"></span> Sair 
	       </a>
	      </span>


	    </div>
	  </div>
	</nav>
	<hr>