<?php require_once 'assets/vendors/header.php';?>

<div class="container">
  <h1>Enviar arquivos</h1>
  <br/>
  <form action="recebe.php" method="POST" enctype="multipart/form-data"><!-- Habilita enviar arquivos -->
    <input type="file" name="arquivo"><br/><br/>
    <input type="submit" value="Enviar">
  </form>
  </div>