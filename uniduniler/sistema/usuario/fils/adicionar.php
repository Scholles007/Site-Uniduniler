<?php

  session_start();

  if(!isset($_SESSION['Email'])){
    header('Location: index.php?erro=1');
  }

  require_once('../db.class.php');
  $objDb = new db();
  $link = $objDb->conecta_mysql();
  $nome =  $_SESSION['id_usuario'];
  $sql = " SELECT * FROM sistema where ID = $nome";
  $resultado_id = mysqli_query($link, $sql);
  if($resultado_id){
    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
      $nome = $registro['Nome'];
      $agenda = $registro['P_Agenda'];
      $mensagens = $registro['P_mensagens'];
      $sistema = $registro['P_Sistema'];
      $fills = $registro['P_Fills'];
      $atualidades = $registro['P_Atualidades'];
      $atividades = $registro['P_Depoimentos'];
    }
  }
  else {
    echo 'Erro na consulta dos emails no banco de dados!';
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Inclui o head -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>uniduniler | ADMINISTRAÇÃO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<!-- Corpo da Aplicação -->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
  <!-- Inclui a parte superior da aplicação-->
     <!-- Logo -->
    <a href="../../usuario" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>U</b>nl</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Uniduni<b>ler</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"></span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../../dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $nome?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nome?>
                  <small>Uniduniler - Com todas as letras</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <!-- Barras do sistema -->
      <!-- sidebar: style can be found in sidebar.less -->
          <!-- Barra lateral: estilos podem ser encontrados em sidebar.less -->
    <section class="sidebar">
      <!-- Barra de usuário lateral -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nome?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

     <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" id="mymenu">
        <li class="header"><b><i><span style="margin-left:25px;">Uniduniler - Todas as letras</span></i></b></li>
        <!-- Optionally, you can add icons to the links -->


        <!-- Agenda -->
                <?php if (isset($agenda)) { ?>
          <?php if ($agenda == '1') { ?>
            <li>
              <a href="../agenda.php">
                <i class="fa fa-calendar"></i> <span>Agenda</span>
              </a>
            </li>
          <?php } ?>
        <?php } ?>

        <!-- Mensagens -->
        <?php if (($mensagens) == '1') { ?>
        <li>
          <a href="../mensagens.php">
            <i class="fa fa-envelope"></i> <span>Mensagens</span>
          </a>
        </li>
        <?php } ?>

        <!-- Sistema -->
        <?php if (($sistema) == '1') { ?>
        <li>
          <a href="../sistema.php">
            <i class="fa fa-cog"></i> <span>Sistema</span>
          </a>
        </li>
        <?php } ?>

        <!-- Fils -->
        <?php if (($fills) == '1') { ?>
        <li class="active">
          <a href="../fils.php">
            <i class="fa fa-paragraph"></i> <span>Fils</span>
          </a>
        </li>
        <?php } ?>

        <!-- Atualidades -->
        <?php if (($atualidades) == '1') { ?>
        <li>
          <a href="../atualidades.php">
            <i class="fa fa-calendar"></i> <span>Atualidades</span>
          </a>
        </li>
        <?php } ?>

        <?php if (($atividades) == '1') { ?>
        <li>
          <a href="../atividades.php">
            <i class="fa fa-check"></i> <span>Atividades</span>
          </a>
        </li>
        <?php } ?>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Fils
      <small>Gerenciar os Fils</small>
    </h1>
  </section>
    <!-- Main content -->
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border" style="padding:15px;">
                <h3 class="box-title">Adicionar FIL</h3>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
              <form action="add_fills.php" method="POST" name="upload_form" id="upload_form" enctype="multipart/form-data">
              <div class="box-body">
                <div class="row">
                  <div class="form-group col-lg-6">
                        <h4>Depoimento 1</h4>
                        <label>Autor</label>
                        <input type="text" name= "autor1" class="form-control" placeholder="Autor">
                        <label>Depoimento</label>
                        <textarea type="text" name="depoimento1" class="form-control" placeholder="Campo opcional"></textarea>
                  </div>
                  <div class="form-group col-lg-6">
                        <h4>Depoimento 2</h4>
                        <label>Autor</label>
                        <input type="text" name="autor2" class="form-control" placeholder="Autor">
                        <label>Depoimento</label>
                        <textarea type="text" name="depoimento2" class="form-control" placeholder="Campo opcional"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                        <h4>Depoimento 3</h4>
                        <label>Autor</label>
                        <input type="text" name="autor3" class="form-control" placeholder="Autor">
                        <label>Depoimento</label>
                        <textarea type="text" name="depoimento3" class="form-control" placeholder="Campo opcional"></textarea>
                  </div>
                  <div class="form-group col-lg-6">
                        <h4>Depoimento 4</h4>
                        <label>Autor</label>
                        <input type="text" name="autor4" class="form-control" placeholder="Autor">
                        <label>Depoimento</label>
                        <textarea type="text" name="depoimento4" class="form-control" placeholder="Campo opcional"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Programação 1</h4>
                        <label>Dia</label>
                        <input type="text" name="data1" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo1" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre1" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 2</h4>
                        <label>Dia</label>
                        <input type="text" name="data2" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo2" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre2" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 3</h4>
                        <label>Dia</label>
                        <input type="text" name="data3" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo3" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre3" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 4</h4>
                        <label>Dia</label>
                        <input type="text" name="data4" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo4" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre4" class="form-control" placeholder="Sobre">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Programação 5</h4>
                        <label>Dia</label>
                        <input type="text" name="data5" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo5" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre5" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 6</h4>
                        <label>Dia</label>
                        <input type="text" name="data6" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo6" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre6" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 7</h4>
                        <label>Dia</label>
                        <input type="text" name="data7" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo7" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre7" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 8</h4>
                        <label>Dia</label>
                        <input type="text" name="data8" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo8" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre8" class="form-control" placeholder="Sobre">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Programação 9</h4>
                        <label>Dia</label>
                        <input type="text" name="data9" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo9" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre9" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 10</h4>
                        <label>Dia</label>
                        <input type="text" name="data10" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo10" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre10" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 11</h4>
                        <label>Dia</label>
                        <input type="text" name="data11" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo11" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre11" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 12</h4>
                        <label>Dia</label>
                        <input type="text" name="data12" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo12" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre12" class="form-control" placeholder="Sobre">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Programação 13</h4>
                        <label>Dia</label>
                        <input type="text" name="data13" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo13" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre13" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 14</h4>
                        <label>Dia</label>
                        <input type="text" name="data14" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo14" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre14" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 15</h4>
                        <label>Dia</label>
                        <input type="text" name="data15" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo15" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre15" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 16</h4>
                        <label>Dia</label>
                        <input type="text" name="data16" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo16" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre16" class="form-control" placeholder="Sobre">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Programação 17</h4>
                        <label>Dia</label>
                        <input type="text" name="data17" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo17" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre17" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 18</h4>
                        <label>Dia</label>
                        <input type="text" name="data18" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo18" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre18" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 19</h4>
                        <label>Dia</label>
                        <input type="text" name="data19" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo19" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre19" class="form-control" placeholder="Sobre">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Programação 20</h4>
                        <label>Dia</label>
                        <input type="text" name="data20" class="form-control" placeholder="dd/mm/aa">
                        <label>Evento</label>
                        <input type="text" name="titulo20" class="form-control" placeholder="Título do evento">
                        <label>Descrição</label>
                        <input type="text" name="sobre20" class="form-control" placeholder="Sobre">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-4">
                        <h4>Noticía 1</h4>
                        <label>Nome</label>
                        <input type="text" name="noticia1" class="form-control" placeholder="SBT: Exemplo">
                        <label>Link</label>
                        <input type="text" name="link1" class="form-control" placeholder="Link da noticia">
                  </div>
                  <div class="form-group col-lg-4">
                        <h4>Noticía 2</h4>
                        <label>Nome</label>
                        <input type="text" name="noticia2" class="form-control" placeholder="SBT: Exemplo">
                        <label>Link</label>
                        <input type="text" name="link2" class="form-control" placeholder="Link da noticia">
                  </div>
                  <div class="form-group col-lg-4">
                        <h4>Noticía 3</h4>
                        <label>Nome</label>
                        <input type="text" name="noticia3" class="form-control" placeholder="SBT: Exemplo">
                        <label>Link</label>
                        <input type="text" name="link3" class="form-control" placeholder="Link da noticia">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-4">
                        <h4>Noticía 4</h4>
                        <label>Nome</label>
                        <input type="text" name="noticia4" class="form-control" placeholder="SBT: Exemplo">
                        <label>Link</label>
                        <input type="text" name="link4" class="form-control" placeholder="Link da noticia">
                  </div>
                  <div class="form-group col-lg-4">
                        <h4>Noticía 5</h4>
                        <label>Nome</label>
                        <input type="text" name="noticia5" class="form-control" placeholder="SBT: Exemplo">
                        <label>Link</label>
                        <input type="text" name="link5" class="form-control" placeholder="Link da noticia">
                  </div>
                  <div class="form-group col-lg-4">
                        <h4>Noticía 6</h4>
                        <label>Nome</label>
                        <input type="text" name="noticia6" class="form-control" placeholder="SBT: Exemplo">
                        <label>Link</label>
                        <input type="text" name="link6" class="form-control" placeholder="Link da noticia">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-2">
                        <h4>Convidado 1</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado1" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado1" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 2</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado2" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado2" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 3</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado3" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado3" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 4</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado4" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado4" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 5</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado5" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado5" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 6</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado6" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado6" class="form-control" placeholder="Ex: DF">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-2">
                        <h4>Convidado 7</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado7" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado7" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 8</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado8" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado8" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 9</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado9" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado9" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 10</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado10" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado10" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 11</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado11" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado11" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 12</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado12" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado12" class="form-control" placeholder="Ex: DF">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-2">
                        <h4>Convidado 13</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado13" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado13" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 14</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado14" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado14" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 15</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado15" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado15" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 16</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado16" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado16" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 17</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado17" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado17" class="form-control" placeholder="Ex: DF">
                  </div>
                  <div class="form-group col-lg-2">
                        <h4>Convidado 18</h4>
                        <label>Nome</label>
                        <input type="text" name="convidado18" class="form-control" placeholder="Nome">
                        <label>Unidade da Federação</label>
                        <input type="text" name="estado18" class="form-control" placeholder="Ex: DF">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 1</h4>
                        <label>Nome</label>
                        <input type="text" name="clb1" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo1" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 2</h4>
                        <label>Nome</label>
                        <input type="text" name="clb2" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo2" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 3</h4>
                        <label>Nome</label>
                        <input type="text" name="clb3" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo3" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 4</h4>
                        <label>Nome</label>
                        <input type="text" name="clb4" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo4" class="form-control" placeholder="Cargo">
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 5</h4>
                        <label>Nome</label>
                        <input type="text" name="clb5" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo5" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 6</h4>
                        <label>Nome</label>
                        <input type="text" name="clb6" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo6" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 7</h4>
                        <label>Nome</label>
                        <input type="text" name="clb7" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo7" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 8</h4>
                        <label>Nome</label>
                        <input type="text" name="clb8" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo8" class="form-control" placeholder="Cargo">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 9</h4>
                        <label>Nome</label>
                        <input type="text" name="clb9" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo9" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 10</h4>
                        <label>Nome</label>
                        <input type="text" name="clb10" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo10" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 11</h4>
                        <label>Nome</label>
                        <input type="text" name="clb11" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo11" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 12</h4>
                        <label>Nome</label>
                        <input type="text" name="clb12" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo12" class="form-control" placeholder="Cargo">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 13</h4>
                        <label>Nome</label>
                        <input type="text" name="clb13" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo13" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 14</h4>
                        <label>Nome</label>
                        <input type="text" name="clb14" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo14" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 15</h4>
                        <label>Nome</label>
                        <input type="text" name="clb15" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo15" class="form-control" placeholder="Cargo">
                  </div>
                  <div class="form-group col-lg-3">
                        <h4>Colaborador 16</h4>
                        <label>Nome</label>
                        <input type="text" name="clb16" class="form-control" placeholder="Nome">
                        <label>Cargo:</label>
                        <input type="text" name="cargo16" class="form-control" placeholder="Cargo">
                  </div>
                </div>

                <label>Design</label>
                <div class="form-group">
                    <select class="form-control" name="tema" id="design">
                      <option value="Peixes">Peixes</option>
                      <option value="Flores">Flores</option>
                      <option value="Borboletas">Borboletas</option>
                      <option value="Pipas">Pipas</option>
                      <option value="Passaros">Passáros</option>
                    </select>
                </div>
                <div class='alert alert-success' role='alert'>Atente-se à proporção da imagem. O ideal é que seja 16:9. Assim, a visualização será visualmente melhor no Site.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
                    //&times;</span></button></div>
                <div class="form-group">
                    <input type="file" name="upload_images[]" id="image_file" multiple ><br>
                    <input type="submit" class="btn btn-primary" name="Salvar">
                     <!-- Por que precisamos do id e do accept? -->
                </div>
              </form>
                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  <!-- Rodapé -->
  <footer class="main-footer">
      <!-- To the right -->
    <div class="pull-right hidden-xs">
      EngNet Consultoria e Implementação
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="../../../../index.php">Uniduniler</a>.</strong> Todos os Direitos Reservados.
  </footer>

</div>

  <!-- Adicionando js e etc-->
  <!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#tabela').DataTable()})
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

</body>
</html>
