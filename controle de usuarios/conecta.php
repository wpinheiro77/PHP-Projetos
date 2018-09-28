<?php
  $dsn = "mysql:dbname=blog;host:localhost";
  $dbuser = "root";
  $dbpass = "";

  try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
  } catch(PDOExcpetion $e){
    echo "Falha de conexão: ".$e->getMessage();
  }
