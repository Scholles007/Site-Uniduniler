<?php

	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }

	require_once('../db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $nome = $_SESSION['Email'];
	$email = $_POST['email'];
	$sobre = $_POST['sobre'];
	$mensagem = $_POST['mensagem'];

	$email_existe = true;

	$sql = "SELECT * FROM sistema WHERE Email = '$email' ";
    if($resultado_id = mysqli_query($link, $sql)){
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if(isset($dados_usuario['Email'])){
            $email_existe = false;
        }

    }else{
        echo 'Erro ao tentar localizar o registro de email';
    }

     if($email_existe){

        $retorno_get = '';

        if($email_existe){
            $retorno_get .= "erro_email=1&";
        }

        header('Location: mensagens.php?' . $retorno_get);
        die();

    }


	$sql_envio  = "INSERT INTO mensagens(Nome, Email, Assunto, Mensagem) VALUES ('$nome', '$email', '$sobre', '$mensagem');";
    $sql_resposta  = "INSERT INTO mensagens_resposta(Nome, Email, Assunto, Mensagem) VALUES ('$nome', '$email', '$sobre', '$mensagem');";

	mysqli_query($link, $sql_envio);
    mysqli_query($link, $sql_resposta);

	$url = '../mensagens.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>
