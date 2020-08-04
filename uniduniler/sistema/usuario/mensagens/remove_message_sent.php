<?php
  session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }

  require_once('../db.class.php');
    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $id = $_POST['id'];
  if(!empty($id)){
    $sql_evento = "DELETE FROM mensagens_resposta WHERE ID =  '$id'";
    mysqli_query($link, $sql_evento);
     if(mysqli_query($link, $sql_evento)){
       $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Mensagem deletada com sucesso
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
       &times;</span></button></div>";
       header("Location: ../mensagens.php");
     }
     else{
       //$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
       //header("Location: ../atualidades.php");
     }
    }
    else{
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao apagar a mensagem
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
    &times;</span></button></div>";
    header("Location: index.php");
    }

?>