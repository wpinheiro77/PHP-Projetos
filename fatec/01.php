página1
<?php
	session_start();

  if(isset($_POST["email"])){
    $email = ($_POST["email"]);
    $senha = ($_POST["senha"]);

  $login = "SELECT * FROM users WHERE email = '{$email}' AND senha = '{$senha}'";

  $acesso = mysqli_query($conecta, $login);
  if(!$acesso){
    die("Falha de consulta ao banco!");
  }

  $informacao = mysqli_fetch_assoc($acesso);

  if(empty($informacao)){
    $mensagem = "Login sem sucesso";
  } else{
		$_SESSION["user_portal"] = $informacao["nome"];
    header("location:main.php");
  }
  }
?>
<?php
  require_once('conecta.php');

if (isset($_SESSION["user"])){
     echo $_SESSION["user"];
}
?>

<?php
  if(isset($_SESSION["user_portal"])){
    $user = $_SESSION["user_portal"];

  $saudacao = "SELECT nome FROM users WHERE id = {$user}";

  $saudacao_login = mysqli_query($conecta, $saudacao);
  if(!$saudacao_login){
    echo "falha no banco!";
  }

  $saudacao_login = mysqli_fetch_assoc($saudacao_login);
  $nome = $saudacao_login["nome"];
?>

<?php }?>