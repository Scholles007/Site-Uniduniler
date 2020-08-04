<?php 

	session_start();

    if(!$_SESSION['id_usuario']){
        header('Location: index.php?erro=1');
    }

	require_once('../db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $nome = $_SESSION['id_usuario'];
    $email = $_SESSION['Email'];
 
	$sql = " SELECT * FROM mensagens where (Nome != $nome and Email = '$email')";


	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

		}

	} else {
		echo 'Erro na consulta dos emails no banco de dados!';
	}