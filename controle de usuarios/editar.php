<?php require_once 'assets/vendors/header.php';
      require_once 'assets/vendors/session.php';

$id = 0;
if(isset($_GET['user_id']) && !empty($_GET['user_id'])){
  $id = addslashes($_GET['user_id']);
}

if(isset($_POST['user_nome']) && !empty($_POST['user_nome'])){
  $nome = addslashes($_POST['user_nome']);
  $email = addslashes($_POST['user_email']);

  $sql = "UPDATE usuarios SET user_nome = '$nome', user_email = '$email' WHERE user_id = '$id'";
  $sql = $pdo->query($sql);

  echo "<script>location.href='index.php';</script>";
}
  $slq = "SELECT * FROM usuarios WHERE user_id = '$id'";
  $sql = $pdo->query($slq);
  if($sql->rowCount() > 0){
    $dado = $sql->fetch();
  } else {
    echo "<script>location.href='index.php';</script>";
  }
?>

<div class="main container-fluid">
  <div class="container">
    <h1>Alterar Cadastro</h1>

    <form action="" method="POST">
      <div class="form-group">
        <label for="user_nome">Nome: </label>
        <input type="text" class="form-control" name="user_nome" placeholder="Digite o seu nome..." value="<?php echo $dado['user_nome']; ?>">
      </div>
      <div class="form-group">
        <label for="user_email">E-mail: </label>
        <input type="email" class="form-control" name="user_email" placeholder="Digite o seu e-mail..." value="<?php echo $dado['user_email']; ?>">
      </div>
      <button type="submit" class="btn btn-primary">ATUALIZAR</button>
    </form>

  </div>
</div>

<?php require_once 'assets/vendors/footer.php'; ?>