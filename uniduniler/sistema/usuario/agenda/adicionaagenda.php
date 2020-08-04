<?php
 	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }

	require_once('../db.class.php');
		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$titulo = $_POST['title'];
		$cor	= $_POST['color'];
		$datai = $_POST['start'];
		$dataf = $_POST['end'];
  if(!empty($titulo) && !empty($cor) && !empty($datai) && !empty($dataf)){
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

  	$sql_evento	= "INSERT INTO agenda (Evento, Cor , Inicio, Termino) VALUES ('$titulo', '$cor','$datai','$dataf')";
  	mysqli_query($link, $sql_evento);

  	//Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido
  	 if(mysqli_insert_id($link)){
       $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento cadastrado com sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
       header("Location: ../agenda.php");
  	 }
     else{
       $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
       header("Location: ../agenda.php");
     }
    }
    else{
  	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
  	header("Location: ../agenda.php");
}
//    $url = '../agenda.php';
//		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
