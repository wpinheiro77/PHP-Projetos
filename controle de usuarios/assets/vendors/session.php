<?php
  session_start();

  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
  }
  else {
    echo "<script>location.href='login.php';</script>";
  }
?>