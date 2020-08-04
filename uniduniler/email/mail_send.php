<?php
  require_once('../sistema/usuario/db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();

  $nome = $_POST['email'];
  $email = 'uniduniler@uniduniler.com.br';
  $sobre = 'Contato pelo Site';
  $mensagem = $_POST['mensagem'];

  $email_existe = true;

  $sql_envio  = "INSERT INTO mensagens(Nome, Email, Assunto, Mensagem) VALUES ('$nome', '$email', '$sobre', '$mensagem');";

  mysqli_query($link, $sql_envio);

  $url = 'mail_ok.php';
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  
?>