<?php
  include 'header.php';

  if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "INSERT INTO users SET nome = '$nome', email = '$email' , senha = '$senha'";
    $pdo->query($sql);

    header("Location: index.php");
  }
?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<form role="form" method="POST">
				<div class="form-group">
          <h2>CADASTRO</h2>
					<label for="">
            Nome:
					</label>
					<input type="text" class="form-control" name="nome" />
        </div>
        <div class="form-group">
					<label>
						E-mail:
					</label>
					<input type="email" class="form-control" name="email" />
				</div>
				<div class="form-group">
					<label>
						Password:
					</label>
					<input type="password" class="form-control" name="senha" />
				</div>
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
</div>