<?php 

	require_once('db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql  = "INSERT INTO sistema/usuário (Nome, Email, Senha, P_Agenda, P_mensagens, P_Sistema, P_Fills, P_Atualidades, P_Depoimentos, P_Galeria, P_Programação, P_Notícias, P_Convidados, P_Equipe) VALUES ('moises', 'moises@moises.com', '12345678', '0', '0', '0', '1', '0', '1', '0', '1', '1', '0', '1');";