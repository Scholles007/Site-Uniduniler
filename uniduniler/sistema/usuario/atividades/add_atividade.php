<?php

	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }
	require_once('../db.class.php');
	//fills
	$titulo= $_POST['titulo'];
	$subtitulo= $_POST['subtitulo'];
	$descricao = $_POST['descricao1'];

	$titulo1 = $_POST['titulo1'];
	$duracao1 = $_POST['duracao1'];
	$publico1 = $_POST['publico1'];
	$necessidade1 = $_POST['necessidade1'];
	$link1 = $_POST['link1'];

	$titulo2 = $_POST['titulo2'];
	$duracao2 = $_POST['duracao2'];
	$publico2 = $_POST['publico2'];
	$necessidade2 = $_POST['necessidade2'];
	$link2 = $_POST['link2'];

	$titulo3 = $_POST['titulo3'];
	$duracao3 = $_POST['duracao3'];
	$publico3 = $_POST['publico3'];
	$necessidade3 = $_POST['necessidade3'];
	$link3 = $_POST['link3'];

    $objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql_atividade_geral = "INSERT INTO atividades_geral(Titulo, subtitulo, Descrição) VALUES ('$titulo','$subtitulo' ,'$descricao')";

	$sql_id = "SELECT * from atividades_galeria";
	$resultado_ids = mysqli_query($link, $sql_id);

                            if($resultado_ids){

                              while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){

                              		$id_fk = $registros['ID_atividades'] + 1;

                              }

                            } else {
                              echo 'Erro na consulta dos emails no banco de dados!';
                            }



	$sql_atividade_informacoes1 = "INSERT INTO atividades_informacoes(Titulo, Duracao, Publico, Necessidade, Youtube, ID_atividades) VALUES ('$titulo1', '$duracao1', '$publico1', '$necessidade1', '$link1', '$id_fk')";

	$sql_atividade_informacoes2 = "INSERT INTO atividades_informacoes(Titulo, Duracao, Publico, Necessidade, Youtube, ID_atividades) VALUES ('$titulo2', '$duracao2', '$publico2', '$necessidade2', '$link2', '$id_fk')";

	$sql_atividade_informacoes3 = "INSERT INTO atividades_informacoes(Titulo, Duracao, Publico, Necessidade, Youtube, ID_atividades) VALUES ('$titulo3', '$duracao3', '$publico3', '$necessidade3', '$link3','$id_fk')";

	mysqli_query($link, $sql_atividade_geral);
	mysqli_query($link, $sql_atividade_informacoes1);
	mysqli_query($link, $sql_atividade_informacoes2);
	mysqli_query($link, $sql_atividade_informacoes3);

	$uploaded_images = array();
		foreach($_FILES['upload_images']['name'] as $key=>$val){
		$upload_dir = "../../dist/img/";
		$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
		$filename = $_FILES['upload_images']['name'][$key];
		if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
		$uploaded_images[] = $upload_file;
		$insert_sql = "INSERT INTO atividades_galeria(file_name, upload_time, ID_atividades)
		VALUES('".$filename."', '".time()."', '".$id_fk."')";
		mysqli_query($link, $insert_sql) or die("database error: ". mysqli_error($con));
			}
		}


    // Display status message
	//echo $statusMsg;
	$url = '../atividades.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
