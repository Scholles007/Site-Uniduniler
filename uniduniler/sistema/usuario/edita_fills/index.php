<?php
  $id = $_GET['id'];
?>

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
  } else {
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
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
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
              <span class="hidden-xs"><?php echo $nome ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nome ?>
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
          <p><?php echo $nome ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

     <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" id="mymenu">
        <li class="header"><b><i><span style="margin-left:25px;">Uniduniler - Todas as letras</span></i></b></li>
        <!-- Optionally, you can add icons to the links -->

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
                <h3 class="box-title">Editar FIL</h3>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
              <form action="editar_fills.php?id=<?php echo $id?>" method="POST" name="upload_form" id="upload_form" enctype="multipart/form-data">
              <div class="box-body">
                <div class="row">
                  <div class="form-group col-lg-6">
                      <?php
                      require_once('../db.class.php');
                      $objDb = new Db();
                      $link = $objDb->conecta_mysql();
                      $certo = (4*$id - 3);
                      $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                      $resultado_id = mysqli_query($link, $sql);
                      if($resultado_id){
                      while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                          $autor = $registro['Autor'];
                          $depoimento = $registro['Depoimento'];
                          echo "<h4>Depoimento 1</h4>";
                          echo "<label>Autor</label>";
                          echo "<input type='text' name='autor1' value='$autor' class='form-control' placeholder='Autor'>";
                          echo "<label>Depoimento</label>";
                          echo "<textarea name='depoimento1' value='$depoimento' class='form-control' placeholder='Campo opcional'>$depoimento</textarea>";
                      }

                      }else{
                              echo 'Erro na consulta';
                          }
                  ?>
                  </div>
                  <div class="form-group col-lg-6">
                      <?php
                      require_once('../db.class.php');
                      $objDb = new Db();
                      $link = $objDb->conecta_mysql();
                      $certo = (4*$id - 2);
                      $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                      $resultado_id = mysqli_query($link, $sql);
                      if($resultado_id){
                      while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                          $autor = $registro['Autor'];
                          $depoimento = $registro['Depoimento'];
                          echo "<h4>Depoimento 2</h4>";
                          echo "<label>Autor</label>";
                          echo "<input type='text' name='autor2' value='$autor' class='form-control' placeholder='Autor'>";
                          echo "<label>Depoimento</label>";
                          echo "<textarea name='depoimento2' value='$depoimento' class='form-control' placeholder='Campo opcional'>$depoimento</textarea>";
                      }

                      }else{
                              echo 'Erro na consulta';
                          }
                  ?>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6">
                      <?php
                      require_once('../db.class.php');
                      $objDb = new Db();
                      $link = $objDb->conecta_mysql();
                      $certo = (4*$id - 1);
                      $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                      $resultado_id = mysqli_query($link, $sql);
                      if($resultado_id){
                      while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                          $autor = $registro['Autor'];
                          $depoimento = $registro['Depoimento'];
                          echo "<h4>Depoimento 3</h4>";
                          echo "<label>Autor</label>";
                          echo "<input type='text' name='autor3' value='$autor' class='form-control' placeholder='Autor'>";
                          echo "<label>Depoimento</label>";
                          echo "<textarea name='depoimento3' value='$depoimento' class='form-control' placeholder='Campo opcional'>$depoimento</textarea>";
                      }

                      }else{
                              echo 'Erro na consulta';
                          }
                  ?>
                  </div>
                  <div class="form-group col-lg-6">
                      <?php
                      require_once('../db.class.php');
                      $objDb = new Db();
                      $link = $objDb->conecta_mysql();
                      $certo = (4*$id);
                      $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                      $resultado_id = mysqli_query($link, $sql);
                      if($resultado_id){
                      while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                          $autor = $registro['Autor'];
                          $depoimento = $registro['Depoimento'];
                          echo "<h4>Depoimento 4</h4>";
                          echo "<label>Autor</label>";
                          echo "<input type='text' name='autor4' value='$autor' class='form-control' placeholder='Autor'>";
                          echo "<label>Depoimento</label>";
                          echo "<textarea name='depoimento4' value='$depoimento' class='form-control' placeholder='Campo opcional'>$depoimento</textarea>";
                      }

                      }else{
                              echo 'Erro na consulta';
                          }
                  ?>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-19;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 1</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data1' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo1' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre1' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-18;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 2</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data2' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo2' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre2' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-17;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 3</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data3' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo3' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre3' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-16;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 4</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data4' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo4' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre4' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-15;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 5</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data5' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo5' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre5' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-14;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 6</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data6' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo6' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre6' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-13;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 7</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data7' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo7' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre7' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-12;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 8</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data8' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo8' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre8' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-11;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 9</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data9' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo9' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre9' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-10;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 10</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data10' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo10' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre10' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-9;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 11</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data11' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo11' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre11' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-8;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 12</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data12' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo12' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre12' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-7;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 13</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data13' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo13' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre13' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-6;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 14</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data14' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo14' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre14' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-5;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 15</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data15' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo15' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre15' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-4;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 16</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data16' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo16' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre16' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-3;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 17</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data17' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo17' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre17' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-2;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 18</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data18' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo18' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre18' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id)-1;
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 19</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data19' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo19' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre19' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (20*$id);
                        $sql = " SELECT * FROM fills_programacao WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $titulo = $registro['titulo'];
                        $sobre = $registro['descricao'];

                        $date = $registro['data'];
                        $timestamp = strtotime($date);
                        $data = date('d/m/Y', $timestamp);

                        echo "<h4>Programação 20</h4>";
                        echo "<label>Dia</label>";
                        echo "<input type='text' name='data20' value='$data' class='form-control' placeholder='dd.mm.aa'>";
                        echo "<label>Evento</label>";
                        echo "<input type='text' name='titulo20' value='$titulo' class='form-control' placeholder='Título do evento'>";
                        echo "<label>Descrição</label>";
                        echo "<input type='text' name='sobre20' value='$sobre' class='form-control' placeholder='Sobre'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-4">
                        <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (6*$id)-5;
                        $sql = " SELECT * FROM fills_notícias WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                            $nome = $registro['Nome'];
                            $site = $registro['Link'];
                            echo "<h4>Noticía 1</h4>";
                            echo "<label>Nome</label>";
                            echo "<input type='text' name='noticia1' value='$nome' class='form-control'>";
                            echo "<label>Link</label>";
                            echo "<input type='text' name='link1' value='$site' class='form-control'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-4">
                        <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (6*$id)-4;
                        $sql = " SELECT * FROM fills_notícias WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                            $nome = $registro['Nome'];
                            $site = $registro['Link'];
                            echo "<h4>Noticía 2</h4>";
                            echo "<label>Nome</label>";
                            echo "<input type='text' name='noticia2' value='$nome' class='form-control'>";
                            echo "<label>Link</label>";
                            echo "<input type='text' name='link2' value='$site' class='form-control'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-4">
                        <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (6*$id)-3;
                        $sql = " SELECT * FROM fills_notícias WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                            $nome = $registro['Nome'];
                            $site = $registro['Link'];
                            echo "<h4>Noticía 3</h4>";
                            echo "<label>Nome</label>";
                            echo "<input type='text' name='noticia3' value='$nome' class='form-control'>";
                            echo "<label>Link</label>";
                            echo "<input type='text' name='link3' value='$site' class='form-control'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-4">
                        <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (6*$id)-2;
                        $sql = " SELECT * FROM fills_notícias WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                            $nome = $registro['Nome'];
                            $site = $registro['Link'];
                            echo "<h4>Noticía 4</h4>";
                            echo "<label>Nome</label>";
                            echo "<input type='text' name='noticia4' value='$nome' class='form-control'>";
                            echo "<label>Link</label>";
                            echo "<input type='text' name='link4' value='$site' class='form-control'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-4">
                        <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (6*$id)-1;
                        $sql = " SELECT * FROM fills_notícias WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                            $nome = $registro['Nome'];
                            $site = $registro['Link'];
                            echo "<h4>Noticía 5</h4>";
                            echo "<label>Nome</label>";
                            echo "<input type='text' name='noticia5' value='$nome' class='form-control'>";
                            echo "<label>Link</label>";
                            echo "<input type='text' name='link5' value='$site' class='form-control'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-4">
                        <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (6*$id);
                        $sql = " SELECT * FROM fills_notícias WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                            $nome = $registro['Nome'];
                            $site = $registro['Link'];
                            echo "<h4>Noticía 6</h4>";
                            echo "<label>Nome</label>";
                            echo "<input type='text' name='noticia6' value='$nome' class='form-control'>";
                            echo "<label>Link</label>";
                            echo "<input type='text' name='link6' value='$site' class='form-control'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-17;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 1</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado1' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado1' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-16;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 2</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado2' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado2' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-15;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 3</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado3' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado3' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-14;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 4</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado4' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado4' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-13;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 5</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado5' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado5' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-12;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 6</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado6' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado6' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-11;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 7</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado7' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado7' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-10;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 8</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado8' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado8' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-9;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 9</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado9' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado9' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-8;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 10</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado10' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado10' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-7;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 11</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado11' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado11' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-6;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 12</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado12' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado12' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-5;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 13</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado13' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado13' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-4;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 14</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado14' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado14' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-3;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 15</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado15' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado15' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-2;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 16</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado16' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado16' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id)-1;
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 17</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado17' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado17' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-2">
                    <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (18*$id);
                        $sql = " SELECT * FROM fills_convidados WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $convidado = $registro['Nome'];
                        $estado = $registro['UF'];
                        echo "<h4>Convidado 18</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='convidado18' value = '$convidado'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='estado18' value = '$estado'class='form-control' placeholder='Ex: DF'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-15;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 1</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb1' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo1' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-14;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 2</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb2' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo2' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-13;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 3</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb3' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo3' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-12;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 4</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb4' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo4' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-11;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 5</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb5' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo5' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-10;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 6</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb6' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo6' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                       <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-9;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 7</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb7' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo7' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-8;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 8</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb8' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo8' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-7;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 9</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb9' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo9' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-6;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 10</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb10' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo10' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-5;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 11</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb11' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo11' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-4;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 12</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb12' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo12' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-3;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 13</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb13' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo13' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-2;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 14</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb14' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo14' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id)-1;
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 15</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb15' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo15' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                  <div class="form-group col-lg-3">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $certo = (16*$id);
                        $sql = " SELECT * FROM fills_colaboradores WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $colaborador = $registro['Nome'];
                        $cargo = $registro['Cargo'];
                        echo "<h4>Colaborador 16</h4>";
                        echo "<label>Nome</label>";
                        echo "<input type='text' name='clb16' value = '$colaborador'class='form-control' placeholder='Nome'>";
                        echo "<label>Unidade da Federação</label>";
                        echo "<input type='text' name='cargo16' value = '$cargo'class='form-control' placeholder='Ex: Cargo'>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
                  </div>
                </div>

                <label>Design</label>
                <div class="form-group">
                    <select class="form-control" name="tema" id="design">
                      <?php
                        require_once('../db.class.php');
                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();
                        $sql = " SELECT * FROM fills WHERE ID = $id";
                        $resultado_id = mysqli_query($link, $sql);
                        if($resultado_id){
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $design = $registro['Design'];
                        echo "<option value='$design'><b>$design<b></option>";
                        echo "<option value='Peixes'>Peixes</option>";
                        echo "<option value='Flores'>Flores</option>";
                        echo "<option value='Borboletas'>Borboletas</option>";
                        echo "<option value='Pipas'>Pipas</option>";
                        echo "<option value='Passaros'>Passáros</option>";
                        }

                        }else{
                                echo 'Erro na consulta';
                            }
                    ?>
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

                              <table id="tabela" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Imagem</th>
                        <th>Apagar</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php
                        require_once('../db.class.php');
                        $objDb = new db();
                        $link = $objDb->conecta_mysql();
                        $sqls = " SELECT * FROM fills_galeria where ID_fills = $id";
                        $resultado_ids = mysqli_query($link, $sqls);
                        if($resultado_ids){
                          while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){
                            $foto = $registros['file_name'];
                            $numero = $registros['ID'];?>
                              <tr>
                              <td class="mailbox-subject"><img src='../../dist/img/<?php echo $foto?>'class='img-fluid' alt='Responsive image' width=240px; height=auto></td>
                              <td>
                                <a>
                                  <div class="item_lista">
                                    <span class="fa fa-trash item_lista" data-toggle="modal" data-target="#ModalApagar"
                                    data-id="<?php echo $registros['ID']; ?>"></span>
                                  </div>
                                </a>
                              </td>
                              </tr>
                        <?php
                          }
                        }
                        else {
                          echo 'Erro na consulta dos emails no banco de dados!';
                        }
                        ?>
                      </tbody>
                    </table>

                      <div id="ModalApagar" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Apagar Postagem</h4>
                          </div>
                          <form action="rmv_galeria.php" method="POST" enctype="multipart/form-data"> <!--faz o post para o arquivo php-->
                            <div class="modal-body">
                              <label>Tem certeza que deseja apagar esta foto?</label>
                              <div class="modal-footer">
                              <input type="hidden" class="form-control" name="id" id="id">
                              <button type="submit" class="btn btn-danger">Apagar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              </div>
                            </div>
                        </form>
                        </div>
                      </div>
                    </div>
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

<script>
  $(function () {
    $('#tabela').DataTable()})
  function DataHora(evento, objeto){
        var keypress=(window.event)?event.keyCode:evento.which;
        campo = eval (objeto);
          if (campo.value == '00/00/0000 00:00:00'){
            campo.value=""
          }
          caracteres = '0123456789';
          separacao1 = '/';
          separacao2 = ' ';
          separacao3 = ':';
          conjunto1 = 2;
          conjunto2 = 5;
          conjunto3 = 10;
          conjunto4 = 13;
          conjunto5 = 16;
          if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (19)){
            if (campo.value.length == conjunto1 )
            campo.value = campo.value + separacao1;
            else if (campo.value.length == conjunto2)
            campo.value = campo.value + separacao1;
            else if (campo.value.length == conjunto3)
            campo.value = campo.value + separacao2;
            else if (campo.value.length == conjunto4)
            campo.value = campo.value + separacao3;
            else if (campo.value.length == conjunto5)
            campo.value = campo.value + separacao3;
          }else{
            event.returnValue = false;
          }
    }
    $('#ModalApagar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('id') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-footer #id').val(recipient)
    })
</script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

</body>
</html>
