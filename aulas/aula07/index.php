<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->

  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">ESQUECI A SENHA</label>
		<div class="login-form">
			<form action="login.php" method="POST">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Email</label>
						<input id="user" type="text" class="input" name="email">
					</div>
					<div class="group">
						<label for="pass" class="label">Senha</label>
						<input id="pass" type="password" class="input" data-type="password" name="senha">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Fazer Login">
					</div>
					<div class="hr"></div>
				</div>
			</form>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>

<?php 
	
	if(isset($_GET['msg'])){

		if($_GET['msg'] == "email_nao_encontrado"){
			$titulo = "Email não cadastrado"; 
			$subtitulo = "Email está incorreto. Favor tentar novamente.";
			$tipo = "error"; 
		}elseif($_GET['msg'] == "senha_incorreta"){
			$titulo = "Senha Incorreta"; 
			$subtitulo = "Erro de senha. Favor tentar novamente.";
			$tipo = "error"; 
		}elseif($_GET['msg'] == "login_sucedido"){
			header("location: admin.php");
		}	
?>

	<script type="text/javascript">
		$(document).ready(function() {
			Swal.fire(
			  "<?=$titulo;?>",
			  "<?=$subtitulo;?>",
			  "<?=$tipo;?>"
			)
		});
	</script>

<?php } ?>