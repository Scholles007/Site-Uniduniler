<?php
 	session_start();
  if(!$_SESSION['Email']){
      header('Location: index.php?erro=1');
  }

	require_once('../db.class.php');
	$objDb = new db();
	$link = $objDb->conecta_mysql();
  $id = $_POST['ID'];
	$nome = $_POST['nome'];
	$email	= $_POST['email'];
	$senha = $_POST['senha'];
  $agenda = (isset($_POST['agenda'])) ? 1 : 0;
  $mensagens = (isset($_POST['mensagens'])) ? 1 : 0;
  $sistema = (isset($_POST['sistema'])) ? 1 : 0;
  $fills = (isset($_POST['fills'])) ? 1 : 0;
  $atualidades = (isset($_POST['atualidades'])) ? 1 : 0;
  $livros = (isset($_POST['livros'])) ? 1 : 0;
  $depoimentos = (isset($_POST['depoimentos'])) ? 1 : 0;
  $galeria = (isset($_POST['galeria'])) ? 1 : 0;
  $prog = (isset($_POST['prog'])) ? 1 : 0;
  $noticias = (isset($_POST['noticias'])) ? 1 : 0;
  $convidados = (isset($_POST['convidados'])) ? 1 : 0;
  $equipe = (isset($_POST['equipe'])) ? 1 : 0;
  $editaagenda = (isset($_POST['editaagenda'])) ? 1 : 0;

  $sql = "UPDATE sistema SET Nome= '$nome', Email= '$email', Senha='$senha', P_Agenda= '$agenda',
  P_mensagens= '$mensagens', P_Sistema= '$sistema', P_Fills= '$fills', P_Atualidades= '$atualidades',
  P_Depoimentos= '$depoimentos', P_Galeria= '$galeria', P_Programação= '$prog', P_Notícias= '$noticias',
  P_Convidados= '$convidados', P_Equipe= '$equipe', P_Edita_Agenda='$editaagenda' WHERE ID = '$id'";
  mysqli_query($link, $sql);

  //Verificar se alterou no banco de dados através "mysqli_affected_rows"
  if(mysqli_affected_rows($link)){
     $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Usuario Alterado com Sucesso
     <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
     //&times;</span></button></div>";
      header("Location: ../sistema.php");
  }
  else{
   $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão
   <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
   &times;</span></button></div>";
   header("Location: ../sistema.php");
  }
?>
