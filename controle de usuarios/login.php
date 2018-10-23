<?php require_once 'assets/vendors/header.php';

session_start();

if(isset($_POST['user_email']) && !empty($_POST)){
  $email = addslashes($_POST['user_email']);
  $senha = md5(addslashes($_POST['user_senha']));

  try {
    $sql = $pdo->query("SELECT * FROM usuarios WHERE user_email = '$email' AND user_senha = '$senha'");
    if($sql->rowCount() > 0){
      $dado = $sql->fetch();
      $_SESSION['user_id'] = $dado['user_id'];
      echo "<script>location.href='index.php';</script>";
    }
  } catch (PDOException $e) {
    echo "Falha de login!".$e->getMessage();
  }
}
?>

<div class="container-fluid"></div>
  <div class="container">
    <h1>Página de Login</h1>
    <form method="POST">

    <div class="form-group">
      <label for="user_email">Email: </label>
      <input type="email" class="form-control" name="user_email" placeholder="Digite o email de cadastro.">
    </div>
    <div class="form-group">
      <label for="user_senha">Senha: </label>
      <input type="password" class="form-control" name="user_senha" placeholder="Digite sua senha.">
    </div>
    <div class="form-group">
      <button class="btn btn-primary">Entrar</button>
    </div>

    </form>
  </div>
</div>

<?php require_once 'assets/vendors/footer.php' ?>