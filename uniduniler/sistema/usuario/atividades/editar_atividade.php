<?php

	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }
	require_once('../db.class.php');

	$id = $_GET['id'];

	$titulo= $_POST['titulo'];
	$subtitulo= $_POST['subtitulo'];
	$descricao = $_POST['descricao1'];

	$id1 = 3*$id-2;
	echo $id1;
	$id2 = 3*$id-1;
	$id3 = 3*$id;

	$titulo1 = $_POST['titulo1'];
	$duracao1 = $_POST['duracao1'];
	$publico1 = $_POST['publico1'];
	$necessidade1 = $_POST['necessidade1'];
	echo $necessidade1;
	$link1 = $_POST['link1'];
	echo $link1;

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

	$sql_titulo = "UPDATE `atividades_geral` SET `Titulo`= '$titulo',`subtitulo`= '$subtitulo', `Descrição`= '$descricao' WHERE ID = $id";

	$sql_convidado1 = "UPDATE `atividades_informacoes` SET `Titulo`='$titulo1',`Duracao`='$duracao1',`Publico`='$publico1',`Necessidade`='$necessidade1',`Youtube`='$link1',`ID_atividades`='$id' WHERE ID = '$id1'";
	$sql_convidado2 = "UPDATE `atividades_informacoes` SET `Titulo`='$titulo2',`Duracao`='$duracao2',`Publico`='$publico2',`Necessidade`='$necessidade2',`Youtube`='$link2',`ID_atividades`='$id' WHERE ID = '$id2'";
	$sql_convidado3 = "UPDATE `atividades_informacoes` SET `Titulo`='$titulo3',`Duracao`='$duracao3',`Publico`='$publico3',`Necessidade`='$necessidade3',`Youtube`='$link3',`ID_atividades`='$id' WHERE ID = '$id3'";

	mysqli_query($link, $sql_titulo);

	mysqli_query($link, $sql_convidado1);
	mysqli_query($link, $sql_convidado2);
	mysqli_query($link, $sql_convidado3);

	$uploaded_images = array();
	foreach($_FILES['upload_images']['name'] as $key=>$val){
	$upload_dir = "../../dist/img/";
	$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
	$filename = $_FILES['upload_images']['name'][$key];
	if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
	$uploaded_images[] = $upload_file;
	$insert_sql = "INSERT INTO atividades_galeria(file_name, upload_time, ID_atividades)
	VALUES('".$filename."', '".time()."', '".$id."')";
	mysqli_query($link, $insert_sql) or die("database error: ". mysqli_error($con));
	}
	}

	$url = '../atividades.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
