<?php

require_once("userController.php")

$login_usuário = $_POST['login'];
$login_usuário = $_POST['senha'];

$result = $crud->select('id, nome, cpf, telefone, email, cep, cidade, rua, estado, bairro, complemento, entrega, facebook, instagram, hash, ativo, plano','usuarios', 'WHERE email = ?')->run([$login_usuário]); //mudar os campos da tabela

	if ($result->rowCount() == 1) {
		$result = $result->fetch(PDO::FETCH_ASSOC);

		if ( password_verify( $senha, $result['hash'] ) ) {

			$_SESSION['idDosolo']    = $result['id']; //verificar se é necessário salvar na sessão
			$_SESSION['nome']        = $result['nome'];
			$_SESSION['cpf']         = $result['cpf'];
			$_SESSION['email']       = $result['email'];
			$_SESSION['telefone']    = $result['telefone'];
			$_SESSION['cep']         = $result['cep'];
			$_SESSION['rua']         = $result['rua'];
			$_SESSION['bairro']      = $result['bairro'];
			$_SESSION['complemento'] = $result['complemento'];
			$_SESSION['entrega']     = $result['entrega'];
			$_SESSION['facebook']    = $result['facebook'];
			$_SESSION['instagram']   = $result['instagram'];
			$_SESSION['cidade']      = $result['cidade'];
			$_SESSION['estado']      = $result['estado'];
			$_SESSION['ativo']       = $result['ativo'];
			$_SESSION['plano']       = $result['plano'];

			echo 'success';
		}else{
			echo 'error';
		}
	}
	else {
		echo 'error';
	}
?>