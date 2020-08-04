<?php
 	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }

	require_once('../db.class.php');
		$objDb = new db();
		$link = $objDb->conecta_mysql();
    $id = $_POST['id'];
		$titulo = $_POST['title'];
		$cor	= $_POST['color'];
		$datai = $_POST['start'];
		$dataf = $_POST['end'];
    var_dump($_POST);
  if(!empty($id) && !empty($titulo) && !empty($cor) && !empty($datai) && !empty($dataf)){
    //Converter a data e hora do formato brasileiro para o formato do Banco de Dados
  	$datai = explode(" ", $datai);
  	list($date, $hora) = $datai;
  	$datai = array_reverse(explode("/", $date));
  	$datai = implode("-", $datai);
  	$datai = $datai . " " . $hora;

  	$dataf = explode(" ", $dataf);
  	list($date, $hora) = $dataf;
  	$dataf = array_reverse(explode("/", $date));
  	$dataf = implode("-", $dataf);
  	$dataf = $dataf . " " . $hora;

  	//$sql_evento	= "UPDATE INTO agenda (Evento, Cor , Inicio, Termino) VALUES ('$titulo', '$cor','$datai','$dataf') WHERE id=''$id'";
    $sql_evento	= "UPDATE agenda SET Evento='$titulo', Cor='$cor' , Inicio='$datai', Termino='$dataf' WHERE id='$id'";
  	mysqli_query($link, $sql_evento);

  	//Verificar se alterou no banco de dados através "mysqli_affected_rows"
  	 if(mysqli_affected_rows($link)){
       $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento Alterado com Sucesso
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
  	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao alterar o evento
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
    &times;</span></button></div>";
  	//header("Location: ../agenda.php");
    }
//    $url = '../agenda.php';
//		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
