<?php
 	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }

	require_once('../db.class.php');
		$objDb = new db();
		$link = $objDb->conecta_mysql();

    //$nome = $_SESSION['id_usuario']; código antigo
		//$email = $_POST['id']; código antigo
    $nome = $_SESSION['Email'];
    $email = $_POST['email'];
    $sobre = $_POST['sobre'];
		$mensagem = $_POST['mensagem'];

  	$sql_envio  = "INSERT INTO mensagens(Nome, Email, Assunto, Mensagem) VALUES ('$nome', '$email', '$sobre', '$mensagem');";
    $sql_resposta  = "INSERT INTO mensagens_resposta(Nome, Email, Assunto, Mensagem) VALUES ('$nome', '$email', '$sobre', '$mensagem');";

    mysqli_query($link, $sql_envio);
    mysqli_query($link, $sql_resposta);

    if(mysqli_insert_id($link)){
      $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Resposta enviada com sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
      header("Location: ../mensagens.php");
    }
    else{
      $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
      header("Location: ../mensagens.php");
    }

?>
