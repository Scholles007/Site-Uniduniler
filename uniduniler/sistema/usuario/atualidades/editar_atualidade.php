<?php
	session_start();
    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }
	require_once('../db.class.php');
	$id = $_GET['id'];
	$texto = $_POST['titulo'];
	$data1 = $_POST['data'];
	$post = $_POST['postagem'];
	$site = $_POST['link1'];
	$data1 = explode(" ", $data1);
  	list($date) = $data1;
  	$data1 = array_reverse(explode("/", $date));
  	$data1 = implode("-", $data1);
  	$data1 = $data1 . " ";

    $objDb = new db();
	$link = $objDb->conecta_mysql();
	$sql_atualidades = "UPDATE `atualidades` SET `Título`= '$texto', `data`='$data1', `Postagem`='$post', `Link`= '$site' WHERE ID = '$id'";
	mysqli_query($link, $sql_atualidades);
	
	$uploaded_images = array();
	foreach($_FILES['upload_images']['name'] as $key=>$val){
	$upload_dir = "../../dist/img/";
	$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
	$filename = $_FILES['upload_images']['name'][$key];
	if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
	$uploaded_images[] = $upload_file;
	$insert_sql = "INSERT INTO atualidades_galeria(file_name, upload_time, ID_atualidades)
	VALUES('".$filename."', '".time()."', '".$id."')";
	mysqli_query($link, $insert_sql) or die("database error: ". mysqli_error($con));
	}
	}
	// Display status message
	//echo $statusMsg;
	$url = '../atualidades.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';






   





