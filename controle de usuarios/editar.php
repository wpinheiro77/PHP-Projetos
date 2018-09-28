<?php
  include 'header.php';

$id = 0;
if(isset($_GET['id']) && !empty($_GET['id'])){
  $id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && !empty($_POST['nome'])) {
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);

  $sql = "UPDATE users SET nome = '$nome' , email = '$email' WHERE id = '$id' ";
  $pdo->query($sql);

  header("Location: index.php");
}

$sql = "SELECT * FROM users WHERE id = '$id' ";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0 ){
  $dado = $sql->fetch();
}else {
  header("Location: index.php");
}
?>


<div class="container">
	<div class="row">
		<div class="col-md-4">
			<form role="form" method="POST">
				<div class="form-group">
          <h2>Alterar Cadastro</h2>
					<label for="">
            Nome:
					</label>
					<input type="text" class="form-control" name="nome" value="<?php echo $dado['nome']; ?>" />
        </div>
        <div class="form-group">
					<label>
						E-mail:
					</label>
					<input type="email" class="form-control" name="email" value="<?php echo $dado['email']; ?>" />
				</div>
				<input type="submit" class="btn btn-primary" value="Atualizar" />
			</form>
		</div>
	</div>
</div>