<?php
  $arquivo = $_FILES['arquivo'];

  if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){#verificva se o arquivo foi enviado
    $nomearquivo = md5(time().rand(0,99)).'.pdf';#gera um nome aleatório para o arquivo
    move_uploaded_file($arquivo['tmp_name'], 'assets/arquivos/'.$nomearquivo); #pega o arquivo da pasta temporária e joga na pasta de destino com o nome do arquivo
    echo 'Arquivo enviado com sucesso!';
  }
?>