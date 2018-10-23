<?php require_once 'assets/vendors/conecta.php';
      require_once 'assets/vendors/session.php';

  if(isset($_GET['user_id']) && !empty($_GET['user_id'])){
    $id = addslashes($_GET['user_id']);
    $sql = "DELETE FROM usuarios WHERE user_id = '$id'";
    $pdo->query($sql);
  }
  echo "<script>location.href='index.php';</script>";
?>