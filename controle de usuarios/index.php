<?php require 'header.php'; ?>
  <br>
  <a class="btn btn-primary inserir fun" role="button" href="adiciona.php">Inserir Novo Usuário</a>
  <br><br>
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>

    <?php
      $sql = "SELECT * FROM users";
      $sql = $pdo->query($sql);
      if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario){
          echo "<tbody>";
          echo'<tr>';
          echo'<td >'.$usuario['nome'].'</td>';
          echo'<td >'.$usuario['email'].'</td>';
          echo'<td><a class="btn btn-primary fun" href="editar.php?id='.$usuario['id'].'">Editar</a> - <a class="btn btn-danger fun" href="excluir.php?id='.$usuario['id'].'">Exluir</a></td>';
          echo "</tbody>";
          echo'</tr>';
        }
      }
    ?>
  </table>
</body>
</html>