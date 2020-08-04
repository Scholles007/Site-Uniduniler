<?php

require_once 'Connection.class.php';
date_default_timezone_set('America/Sao_Paulo');
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'uniduniler';
$char_set = 'utf8';

class CRUD extends Connection {

	private $query , $run;

	public function __construct(){
		 global $hostname, $database,$char_set,$username,$password;
		parent::__construct("mysql:host=$hostname; dbname=$database; charset=$char_set",$username,$password);
	}

	private function set_statement($e){
		if(is_object(parent::con())){
			$this->query = parent::con()->prepare($e);
		}else{
			die(parent::killCon());
		}
	}

	private function do_run(){
		$this->query->execute($this->run);
	}

	public function run($r = []){
		$this->run = $r;
		$this->do_run();

		return $this->query;
	}

	public function last_id(){
		return parent::con()->lastInsertId();
	}

	//$crud->insert('tabela','nome = ?,email = ?,id = ?')->run(['Teste','cebola@çéáâ.com',3]);
	public final function insert($table,$values) {
		$this->set_statement("INSERT INTO ".$table." SET ".$values."");
		return $this;
	}

	//$crud->select('*','tabela', 'WHERE id = ?')->run([3]);
	public function select($fields,$table,$condition = '') {
		$this->set_statement("SELECT ".$fields." FROM ".$table." ".$condition."");
		return $this;
	}

	//$crud->update('tabela', 'email = ?','WHERE id = ?')->run(['email@teste',3]);
	public function update($table,$values,$condition) {
		$this->set_statement("UPDATE ".$table." SET ".$values."".$condition."");
		return $this;
	}

	//$crud->delete('tabela','WHERE id = ?')->run([0]);
	public function delete($table,$condition) {
		$this->set_statement("DELETE FROM ".$table." ".$condition."");
		return $this;
	}
}
$crud = new CRUD;