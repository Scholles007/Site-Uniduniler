<?php 

	session_start();

    if(!$_SESSION['id_usuario']){
        header('Location: index.php?erro=1');
    }

	require_once('../db.class.php');

	

?>