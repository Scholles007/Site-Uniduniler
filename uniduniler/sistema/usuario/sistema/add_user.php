<?php

	session_start();

  if(!$_SESSION['Email']){
      header('Location: index.php?erro=1');
  }

	require_once('../db.class.php');

  $objDb = new db();
  $link = $objDb->conecta_mysql();

  $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);
	echo $senha;

	$agenda = (isset($_POST['agenda'])) ? 1 : 0;
	$edita_agenda = (isset($_POST['editaagenda'])) ? 1 : 0;
	$mensagens = (isset($_POST['mensagens'])) ? 1 : 0;
	$sistema = (isset($_POST['sistema'])) ? 1 : 0;
	$fills = (isset($_POST['fills'])) ? 1 : 0;
	$atualidades = (isset($_POST['atualidades'])) ? 1 : 0;
	$depoimentos = (isset($_POST['depoimentos'])) ? 1 : 0;
	$galeria = (isset($_POST['galeria'])) ? 1 : 0;
	$prog = (isset($_POST['prog'])) ? 1 : 0;
	$noticias = (isset($_POST['noticias'])) ? 1 : 0;
	$convidados = (isset($_POST['convidados'])) ? 1 : 0;
	$equipe = (isset($_POST['equipe'])) ? 1 : 0;

	$sql  = "INSERT INTO sistema(Nome, Email, Senha, P_Agenda, P_mensagens, P_Sistema, P_Fills, P_Atualidades, P_Depoimentos,
	P_Galeria, P_Programação, P_Notícias, P_Convidados, P_Equipe, P_Edita_Agenda) VALUES ('$nome', '$email', '$senha', '$agenda', '$mensagens',
	'$sistema', '$fills', '$atualidades', '$depoimentos', '$galeria', '$prog', '$noticias', '$convidados', '$equipe' , '$edita_agenda');";

	mysqli_query($link, $sql);
	if(mysqli_insert_id($link)){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Colaborador cadastrado com sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: ../sistema.php");
	}
	else{
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: ../sistema.php");
	}
