<?php 
	session_start();
    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }
	$target_dir = "../../../dist/img/atualidades/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
				//echo "File is an image - " . $check["mime"] . "."; Front, colocar essa mensagem na modal
				$uploadOk = 1;
		} else {
				//echo "File is not an image."; Front, colocar essa mensagem na modal
				$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		//echo "Sorry, file already exists."; Front, colocar essa mensagem na modal
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		//echo "Sorry, your file is too large."; Front, colocar essa mensagem na modal
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "pdf" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; Front, colocar essa mensagem na modal
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$_SESSION['msg'] = "<div class='alert alert-sucess' role='alert'>Verifique a extensão das imagens. Só é permitido .png, .jpg, .jpeg e .gif <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
  	header("Location: ../atualidades.php");
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."; Front, colocar essa mensagem na modal
			//$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Verifique a extensão das imagens. Só é permitido .png, .jpg, .jpeg e .gif <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
  			header("Location: ../atualidades.php");

		} else {
				//echo "Sorry, there was an error uploading your file."; Front, colocar essa mensagem na modal
		}
	}
		require_once('../db.class.php');
		$objDb = new db();
		$link = $objDb->conecta_mysql();
		$data1 = $_POST['data'];
		$data1 = explode(" ", $data1);
	  	list($date, $hora) = $data1;
	  	$data1 = array_reverse(explode("/", $date));
	  	$data1 = implode("-", $data1);
	  	$data1 = $data1 . " " . $hora;
		/*$sql  = "INSERT INTO atualidades(Título, Postagem, Link, Imagem)
		VALUES ('$_POST[titulo]', '$_POST[]', '$_POST[]','$_POST[]');"; implementarei com a imagem */
		$url_file = "uniduniler/dist/img/atualidades/".basename($_FILES["fileToUpload"]["name"]);
		$sql  = "INSERT INTO atualidades(Título, data, Postagem, Link, Imagem)
		VALUES ('$_POST[titulo]', '$data1', '$_POST[postagem]', '$_POST[link]','$url_file');";

  		$sql_id = "SELECT * from atualidades_galeria";
		$resultado_ids = mysqli_query($link, $sql_id);

                            if($resultado_ids){

                              while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){

                              		$id = $registros['ID_atualidades'];
                              		$id_fk = $id + 1;

                              }

                            } else {
                              echo 'Erro na consulta dos emails no banco de dados!';
                            }
        $uploaded_images = array();
		foreach($_FILES['upload_images']['name'] as $key=>$val){
		$upload_dir = "../../dist/img/";
		$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
		$filename = $_FILES['upload_images']['name'][$key];
		if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
		$uploaded_images[] = $upload_file;
		$insert_sql = "INSERT INTO atualidades_galeria(file_name, upload_time, ID_atualidades)
		VALUES('".$filename."', '".time()."', '".$id_fk."')";
		mysqli_query($link, $insert_sql) or die("database error: ". mysqli_error($con));
			}
		}

		mysqli_query($link, $sql);
		$url = '../atualidades.php';
  		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

	?>
