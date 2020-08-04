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
    $sql_evento = "DELETE FROM `atividades_galeria` WHERE id =  '$id'";
    mysqli_query($link, $sql_evento);
     if(mysqli_query($link, $sql_evento)){
       $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Foto deletada com sucesso
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
       &times;</span></button></div>";
       header("Location: ../atividades.php");
     }
     else{
       //$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
       //header("Location: ../atualidades.php");
     }
    }
    else{
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao apagar a foto
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
    &times;</span></button></div>";
    header("Location: index.php");
    }

?>
