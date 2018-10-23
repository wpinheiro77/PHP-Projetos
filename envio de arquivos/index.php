<?php require_once 'assets/vendors/header.php';

if(isset($_GET['ordem']) && !empty($_GET['ordem'])){ #verifica se ordem foi enviado
  $ordem = addslashes($_GET['ordem']); #pega o que foi enviado no select
  $sql = "SELECT * FROM usuarios ORDER BY ".$ordem; #faz a busca baseado no que foi selecionado no select e jogado na $ordem
} else {
  $ordem = ""; #deixa aqui para que seja mostrado o item selecionado no select e ele não fique vazio
  $sql = "SELECT * FROM usuarios ORDER BY usuarios"; #faz a listagem sem critérios por default ao carregar a página
}
?>

<br/>
<form method="GET" class="form-group container">
  <select name="ordem" onchange="this.form.submit()"> <!-- Faz o submit na própria página -->
    <option value=""></option>
    <option value="user_nome" <?php echo($ordem=="user_nome")?'selected="selected"':'' ?>>Nome</option> <!-- Se $ordem = user_nome -> mostra o selecionado, se não, mostra vazio -->
    <option value="user_email" <?php echo($ordem=="user_email")?'selected="selected"':'' ?>>Email</option>
    <option value="user_idade" <?php echo($ordem=="user_idade")?'selected="selected"':'' ?>>Idade</option>
  </select>
</form>

<table class="table container">
  <tr>
    <thead>
      <th>Nome</th>
      <th>Email</th>
      <th>Idade</th>
    </thead>
  </tr>
  <?php

    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0){
       foreach ($sql->fetchAll() as $usuarios):
  ?>
  <tr>
    <tbody>
      <td><?php echo $usuarios['user_nome']; ?></td>
      <td><?php echo $usuarios['user_email']; ?></td>
      <td><?php echo $usuarios['user_idade']; ?></td>
    </tbody>
  </tr>
       <?php endforeach; } ?>
</table>