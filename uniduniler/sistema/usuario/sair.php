<?php

	session_start();

	unset($_SESSION['id_usuario']);
    unset($_SESSION['Email']);
	$url = '../usuario';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>