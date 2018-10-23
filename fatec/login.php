<?php require_once('header.php'); ?>
<?php
	session_start();

  if(isset($_POST["email"])){
    $email = ($_POST["email"]);
    $senha = ($_POST["senha"]);

  $login = "SELECT * FROM users WHERE email = '{$email}' AND senha = '{$senha}'";

  $acesso = mysqli_query($conecta, $login);
  if(!$acesso){
    die("Falha de consulta ao banco!");
  }

  $informacao = mysqli_fetch_assoc($acesso);

  if(empty($informacao)){
    $mensagem = "Login sem sucesso";
  } else{
		$_SESSION["user_portal"] = $informacao["nome"];
    header("location:main.php");
  }
  }
?>

<!-- navbar -->
<?php require_once('navbar.php'); ?>
<!-- end navbar -->

<!-- panel control left -->
<?php require_once('sidebar.php'); ?>
<!-- end panel control left -->


<!-- main -->
<div class="container main-content">
	<div class="row main align-items-center">
		<div class="jumbotron col-10 center login">
			<h1 class="display-5">Seja bem-vindo!</h1>
			<br/>
			<p class="lead">Sistema de ouvidoria Fatec Tatuí</p>
			<hr class="my-2">
			<p class="lead">
				<br/>
				<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal1" href="#" role="button">Login</a>
			</p>
			<div>
			<?php
       	if(isset($mensagem)){
      ?>
       	<p class="alert alert-danger"><?php echo $mensagem; ?></p>
      <?php
       	}
      ?>
			</div>
		</div>
	</div>
</div>
<!-- end main -->


<!-- modal login -->
<div class="row">
	<div class="col-12">
		<div class="modal fade" id="modal1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 moda-title>Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"></button>
						<span aria-hidden="true">&times;</span>
					</div>
					<div class="modal-body">

					<form method="POST" class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="" class="form-control" aria-describedby="helpEmail" placeholder="Digite o seu email...">

						<label for="senha">Senha</label>
						<input type="password" name="senha" id="" class="form-control" placeholder="Digite a sua senha...">

						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- fim modal login -->

<!-- footer -->
<?php require_once('footer.php'); ?>
<!-- end footer -->
