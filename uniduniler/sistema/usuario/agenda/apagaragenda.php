<?php
 	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }

	require_once('../db.class.php');
		$objDb = new db();
		$link = $objDb->conecta_mysql();
    $id = $_POST['id'];
  if(!empty($id)){
    $sql_evento	= "DELETE FROM agenda WHERE ID='$id'";
  	mysqli_query($link, $sql_evento);
  	 if(mysqli_query($link, $sql_evento)){
       $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento deletado com sucesso
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
       &times;</span></button></div>";
       header("Location: ../agenda.php");
  	 }
     else{
       $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
       &times;</span></button></div>";
       header("Location: ../agenda.php");
     }
    }
    else{
  	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao apagar o evento
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
    &times;</span></button></div>";
  	header("Location: ../agenda.php");
    }
//    $url = '../agenda.php';
//		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
