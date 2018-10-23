<?php include_once 'assets/vendors/header.php';
      require_once 'assets/vendors/session.php';

  if(isset($_POST['user_nome']) && !empty($_POST['user_nome'])){
    $nome = addslashes($_POST['user_nome']);
    $email = addslashes($_POST['user_email']);
    $senha = md5(addslashes($_POST['user_senha']));

    $sql = "INSERT INTO usuarios SET user_nome = '$nome', user_email = '$email', user_senha = '$senha'";
    $pdo->query($sql);
    echo "<script>location.href='index.php';</script>";
  }
?>

<div class="main container-fluid">
  <div class="container">
    <h1>Cadastro de Usuários</h1>
    <form action="" method="POST">
      <div class="form-group">
        <label for="user_nome">Nome: </label>
        <input type="text" class="form-control" name="user_nome" placeholder="Digite o seu nome...">
      </div>
      <div class="form-group">
        <label for="user_email">E-mail: </label>
        <input type="email" class="form-control" name="user_email" placeholder="Digite o seu e-mail...">
      </div>
      <div class="form-group">
        <label for="user_senha">Senha: </label>
        <input type="password" class="form-control" name="user_senha" placeholder="Digite a sua senha...">
      </div>
      <button type="submit" class="btn btn-primary">CADASTRAR</button>
    </form>
  </div>
</div>











<?php include_once 'assets/vendors/footer.php'; ?>