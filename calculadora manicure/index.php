<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Calculadora de Retorno APP Manicure">
    <meta name="keywords" content="App Manicure">
    <meta name="author" content="William Nunes Pinheiro">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Calculadora de retorno APP Manicure</title>
</head>
<body class="container">
<h3>Cálculo de retorno</h3>
<br>
<form action="index.php" method="post" name="card">
  <div class="form-group">
    <label for="">Quantidade de Manicures:</label>
    <input type="number" name="manicure" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Valor Médio de serviços:</label>
    <input type="number" name="vmedio" class="form-control">
  </div>

  <div class="form-group">
  <label for="">Quantidade de serviços realizados por semana:</label>
    <input type="number" name="semana" class="form-control">
  </div>

  <div class="form-group">
  <label for="">Comissão em %:</label>
    <input type="number" name="comissao" class="form-control">
  </div>

  <div class="form-group">
    <input type="submit" value="Enviar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-warning">
  </div>
</form>

<div class="jumbotron">
  <div class="container">

<?php

if (isset($_POST["manicure"]) and ($_POST["vmedio"]) and ($_POST["semana"]) and ($_POST["comissao"])) {
  $manicure = $_POST["manicure"];
  $vmedio = $_POST["vmedio"];
  $semana = $_POST["semana"];
  $comissao = $_POST["comissao"];

  $fsemana = ($manicure * $semana) * $vmedio;
  $fmes = $fsemana * 4;
  $tcomissao = $fmes * ($comissao / 100);



    echo "<h2>Resultado</h2>";
    echo "Nº Manicures usando o APP: " . $manicure . "<br><br>";
    echo "Valor total faturado na semana: R$" . number_format($fsemana, 2 , "," , ".") ."<br><br>";
    echo "Valor total faturado no mês R$" . number_format($fmes, 2 , "," , ".") . "<br><br>";
    echo "Comissão da empresa: R$" . number_format($tcomissao, 2 , ",", ".") . "<br><br>";

    //echo "Exibe valor monetário: R$".number_format($semanal , 2 , "," , ".");
    // (variável, casas decimais, separador centavos, separador milhar)

  echo "<a href='index.php'><button class='btn btn-primary'>Resetar</button></a>";
} else {

  echo "Por favor preencha todos os campos.";
}
?>

  </div>
</div>



 <br><br>

</body>
</html>