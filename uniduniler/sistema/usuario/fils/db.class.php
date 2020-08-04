<?php

	class db {

		//host
		private $host = 'localhost';

		//usuario
		private $usuario = 'root';

		//senha
		private $senha = '';

		//banco de dados
		private $database = 'uniduniler';
		public function conecta_mysql(){

			//criar conexão
			$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

			//ajustar o charset
			mysqli_set_charset($con, 'utf8');

			if(mysqli_connect_errno()){
				echo 'ERRO: '.mysqli_connect_error();
			}

			return $con;
		}
	}

?>
