<?php
	session_start();
    require_once('db.class.php');
	$Email = $_POST['Email'];
	$Senha = sha1($_POST['Senha']);
	$sql = "SELECT ID, Email, Senha FROM sistema WHERE Email = '$Email' AND Senha = '$Senha' ";
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	$resultado_id = mysqli_query($link, $sql);
	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['Email'])){
            
            $_SESSION['id_usuario'] = $dados_usuario['ID'];
            $_SESSION['Email'] = $dados_usuario['Email'];
            $_SESSION['Senha'] = $dados_usuario['Senha'];
            header('Location: agenda.php');
        } else {
            header('Location: index.php?erro=1');
        }
	} else {
		echo 'Usuário não encontrado. Tente novamente mais tarde.';
	}
?>