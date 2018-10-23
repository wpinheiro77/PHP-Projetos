<?php require_once 'assets/vendors/header.php';
      require_once 'assets/vendors/session.php';
?>

<div class="container-fluid">
  <div class="container">
    <form action="">
      
    </form>
    <table class="table table-striped table-hover tabela">
      <thead class="thead-dark">
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <!-- PEGANDO USERS DA TABELA -->
          <?php
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);

    if($sql->rowCount() >0){
      foreach($sql->fetchAll() as $usuarios){
        echo '<td>'. $usuarios["user_nome"] .'</td>';
        echo '<td>'. $usuarios["user_email"] .'</td>';
        echo '<td><a href="editar.php?user_id='.$usuarios['user_id'].'">Editar</a> - <a href="excluir.php?user_id='.$usuarios['user_id'].'">Excluir</a> </td>';
        echo '<tr/>';
      }
    } else {
        echo '<div class="erro-usuarios alert-danger">';
        echo 'Não há usuários cadastrados...';
        echo '</div>';
    }
  ?>
      </tbody>
    </table>

    <div class="edita container-fluid">
      <div class="container">
        <a href="cadastrar.php">Cadastrar Usuários</a>
      </div>
    </div>
  </div>
</div>

<?php require_once 'assets/vendors/footer.php'; ?>