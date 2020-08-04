<?php

	abstract class Connection {

		private $dsn, $user, $pass, $con, $error_con;

		public function __construct($dsn,$user,$pass){

			$this->dsn  = $dsn;
			$this->user = $user;
			$this->pass = $pass;
			$this->setCon();
		}

		private function setCon(){
			try {
				if (is_null($this->con)) {
					$this->con = new PDO($this->dsn,$this->user,$this->pass);
				}

			} catch(PDOException $e){
				$this->error_con = 'FALHA AO ESTABELECER CONEXÃO COM O BANCO DE DADOS';
			}
		}

		public function con() {
			return $this->con;
		}

		public function killCon() {
			return '<pre class=error-die>'.$this->error_con.'</pre>';
		}
	}