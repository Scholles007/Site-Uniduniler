<?php
	session_start();


    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }
	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

    require_once('db.class.php');
    $id = $_GET['id'];
	$atual = sha1($_POST['atual']);
	$nova = sha1($_POST['nova']);
	$sql = "SELECT * FROM sistema";

	$resultado_id = mysqli_query($link, $sql);
	if($resultado_id){
		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			$senha = $registro['Senha'];
					            
			if($senha == $atual){

				$sql_depoimento1 = "UPDATE sistema SET Senha = '$nova' where Nome = '$id'";

				}else{
			
				echo 'Senhas não conferem!';
			}}}else {
			echo 'Usuário não encontrado. Tente novamente mais tarde.';
		}

	mysqli_query($link, $sql);
	mysqli_query($link, $sql_depoimento1);

	$url = 'agenda.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>