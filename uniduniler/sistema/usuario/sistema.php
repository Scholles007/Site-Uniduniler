<?php

  session_start();

  if(!isset($_SESSION['Email'])){
    header('Location: index.php?erro=1');
  }

  require_once('db.class.php');
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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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
    <a href="../usuario" class="logo">
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
              <img src="../dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $nome ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nome ?>
                  <small>Uniduniler - Com todas as letras</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="alterar_senha.php" class="btn btn-default btn-flat">Alterar Senha</a>
                </div>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="sair.php" class="btn btn-default btn-flat">Sair</a>
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
          <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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


        <!-- Agenda -->
        <?php if (isset($agenda)) { ?>
          <?php if ($agenda == '1') { ?>
            <li>
              <a href="agenda.php">
                <i class="fa fa-calendar"></i> <span>Agenda</span>
              </a>
            </li>
          <?php } ?>
        <?php } ?>

        <!-- Mensagens -->
        <?php if (($mensagens) == '1') { ?>
        <li>
          <a href="mensagens.php">
            <i class="fa fa-envelope"></i> <span>Mensagens</span>
          </a>
        </li>
        <?php } ?>

        <!-- Sistema -->
        <?php if (($sistema) == '1') { ?>
        <li class="active">
          <a href="sistema.php">
            <i class="fa fa-cog"></i> <span>Sistema</span>
          </a>
        </li>
        <?php } ?>

        <!-- Fils -->
        <?php if (($fills) == '1') { ?>
        <li>
          <a href="fils.php">
            <i class="fa fa-paragraph"></i> <span>Fils</span>
          </a>
        </li>
        <?php } ?>

        <!-- Atualidades -->
        <?php if (($atualidades) == '1') { ?>
        <li>
          <a href="atualidades.php">
            <i class="fa fa-calendar"></i> <span>Atualidades</span>
          </a>
        </li>
        <?php } ?>

        <?php if (($atividades) == '1') { ?>
        <li>
          <a href="atividades.php">
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
      Sistema
      <small>Administre as contas de usuario</small>
    </h1>
  </section>
    <!-- Main content -->
<section class="content container-fluid">
  <?php
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>
  <div class="box">
    <div class="box-header with-border" style="padding:15px;">
      <h3 class="box-title">Adicionar contas de usuário</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#ModalAdicionar">Adicionar
      </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <table id="tabela" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Registro</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Apagar</th>
      </tr>
      </thead>
      <tbody>
      <?php
        $sql = " SELECT * FROM sistema";
        $resultado_ids = mysqli_query($link, $sql);
        if($resultado_ids){
          while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){?>
            <tr>
            <td><?php echo $registros['ID']?></td>
            <td class="mailbox-name">
              <a data-toggle="modal" data-target="#ModalLer"><?php echo $registros['Nome']?></a>
            </td>
            <td class="mailbox-subject">
              <b><?php echo $registros['Email']?></b>
            </td>
            <td>
              <a>
                <?php if($nome == 'Super User') { ?>
                <div class="item_lista">
                  <span class="fa fa-edit item_lista" data-toggle="modal" data-target="#ModalItem01"
                  data-id="<?php echo $registros['ID']; ?>" data-nome="<?php echo $registros['Nome']; ?>"
                  data-email="<?php echo $registros['Email']; ?>" data-senha="<?php echo $registros['Senha']; ?>"
                  data-pagenda="<?php echo $registros['P_Agenda']?>" data-pmensagens="<?php echo $registros['P_mensagens']?>"
                  data-psistema="<?php echo $registros['P_Sistema']?>" data-pfills="<?php echo $registros['P_Fills']?>"
                  data-patualidades="<?php echo $registros['P_Atualidades']?>" data-pdepoimentos="<?php echo $registros['P_Depoimentos']?>"
                  data-pgaleria="<?php echo $registros['P_Galeria']?>" data-pprogramacao="<?php echo $registros['P_Programação']?>"
                  data-pnoticias="<?php echo $registros['P_Notícias']?>" data-pconvidados="<?php echo $registros['P_Convidados']?>"
                  data-pequipe="<?php echo $registros['P_Equipe']?>" data-peditaagenda="<?php echo $registros['P_Edita_Agenda']?>"></span>
                </div>
                <?php }

                else{ echo 'Indisponível';}

                ?>
              </a>
            </td>
            <td>
              <a>
                <?php if($nome == 'Super User') { ?>
                <div class="item_lista">
                  <span class="fa fa-trash-o item_lista btn-excluir" data-toggle="modal" data-target="#ModalApagar"
                  data-id="<?php echo $registros['ID']; ?>"></span>
                </div>
                <?php }

                else{ echo 'Indisponível';}

                ?>
              </a>
            </td>
            </tr>
        <?php
          }
        }
        else{
          echo 'Erro na consulta dos emails no banco de dados!';
        }
        ?>
      <!-- Onde ficará todas as entradas -->
      </tbody>
    </table>

      <!-- Modal de adição -->
  <div id="ModalAdicionar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionar</h4>
        </div>
       <form action="sistema/add_user.php" method="POST"> <!--faz o post para o arquivo php-->
        <div class="modal-body">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" name = "nome" class="form-control" placeholder="Nome"
            required minlength="3">
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label>Email</label>
              <input type="email" name= "email" class="form-control" placeholder="Email"
              required minlength="3">
            </div>
            <div class="form-group col-md-6">
              <label>Senha</label>
              <input type="password" name = "senha" class="form-control" placeholder="Senha"
              required minlength="3">
            </div>
          </div>
          <div class="form-group">
            <label>Privilégios</label><br>
            <div class="row">
              <div class="col-md-6">
                <input type="checkbox" name="agenda"> Agenda</input><br>
                <input type="checkbox" name="editaagenda"> Editar agenda </input></br>
                <input type="checkbox" name="mensagens"> Mensagens</input><br>
                <input type="checkbox" name="sistema"> Sistema</input><br>
                <input type="checkbox" name="fills"> Fils</input><br>
                <input type="checkbox" name="atualidades"> Atualidades</input><br>
              </div>
              <div class="col-md-6">
                <input type="checkbox" name="depoimentos"> Atividades</input><br>
                <input type="checkbox" name="galeria"> Galeria</input><br>
                <input type="checkbox" name="prog"> Programação</input><br>
                <input type="checkbox" name="noticias"> Notícias</input><br>
                <input type="checkbox" name="convidados"> Convidados</input><br>
                <input type="checkbox" name="equipe"> Equipe</input><br>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal de edição -->
  <div id="ModalItem01" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar</h4>
        </div>
        <form action="sistema/edit_user.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label>Nome: </label>
            <label id="nome" name="nome"></label>
            <input type="hidden" id="id" name="ID">
            <input type="hidden" id="nome" name="nome">
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label>Email: </label>
              <label id="email"></label>
              <input type="hidden" id="email" name="email">
              <input type="hidden" id="senha" name="senha">
            </div>
          </div>
          <div class="form-group">
            <label>Privilégios</label><br>
            <div class="row">
              <div class="col-md-6">
                <input type="checkbox" id="agenda" name="agenda"> Agenda</input><br>
                <input type="checkbox" id="editaagenda" name="editaagenda"> Editar agenda </input></br>                <input type="checkbox" id="mensagens" name="mensagens"> Mensagens</input><br>
                <input type="checkbox" id="sistema" name="sistema"> Sistema</input><br>
                <input type="checkbox" id="fills" name="fills"> Fills</input><br>
                <input type="checkbox" id="atualidades" name="atualidades"> Atualidades</input><br>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="depoimentos" name="depoimentos"> Atividades</input><br>
                <input type="checkbox" id="galeria" name="galeria"> Galeria</input><br>
                <input type="checkbox" id="programacao" name="programacao"> Programação</input><br>
                <input type="checkbox" id="noticias" name="noticias"> Notícias</input><br>
                <input type="checkbox" id="convidados" name="convidados"> Convidados</input><br>
                <input type="checkbox" id="equipe" name="equipe"> Equipe</input><br>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <div id="ModalApagar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Apagar Usuário</h4>
        </div>
        <form action="sistema/rmv_user.php" method="POST" enctype="multipart/form-data"> <!--faz o post para o arquivo php-->
          <div class="modal-body">
            <label>Tem certeza que quer apagar o usuário?</label>
            <div class="modal-footer">
            <input type="hidden" class="form-control" name="id" id="idexcluir">
            <button type="submit" class="btn btn-danger">Apagar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
      </form>
      </div>
    </div>
  </div>

  </div>
  </div>
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
    <strong>Copyright &copy; 2018 <a href="../../index.php">Uniduniler</a>.</strong> Todos os Direitos Reservados.
  </footer>

</div>

  <!-- Adicionando js e etc-->
  <!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- page script -->
<script>
  $(function () {
    $('#tabela').DataTable()})

  $(document).on('click', '.btn-excluir', function (event) {
    $('#idexcluir').val($(this).data('id'));
  })

  $('#ModalItem01').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient0 = button.data('id') // Extract info from data-* attributes
    var recipient1 = button.data('nome')
    var recipient2 = button.data('email')
    var recipient3 = button.data('senha')
    var recipient4 = button.data('pagenda')
    var recipient5 = button.data('pmensagens')
    var recipient6 = button.data('psistema')
    var recipient7 = button.data('pfills')
    var recipient8 = button.data('patualidades')
    var recipient9 = button.data('pdepoimentos')
    var recipient10 = button.data('pgaleria')
    var recipient11 = button.data('pprogramacao')
    var recipient12 = button.data('pnoticias')
    var recipient13 = button.data('pconvidados')
    var recipient14 = button.data('pequipe')
    var recipient15 = button.data('peditaagenda')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Editar "' + recipient1 +'"')
    modal.find('.modal-body #id').text(recipient0)
    modal.find('.modal-body #nome').text(recipient1)
    modal.find('.modal-body #email').text(recipient2)
    modal.find('.modal-body #senha').text(recipient3)
    modal.find('.modal-body #id').val(recipient0)
    modal.find('.modal-body #nome').val(recipient1)
    modal.find('.modal-body #email').val(recipient2)
    modal.find('.modal-body #senha').val(recipient3)
    modal.find('.modal-body #agenda').val(recipient4)
    modal.find('.modal-body #mensagens').val(recipient5)
    modal.find('.modal-body #sistema').val(recipient6)
    modal.find('.modal-body #fills').val(recipient7)
    modal.find('.modal-body #atualidades').val(recipient8)
    modal.find('.modal-body #depoimentos').val(recipient9)
    modal.find('.modal-body #galeria').val(recipient10)
    modal.find('.modal-body #programacao').val(recipient11)
    modal.find('.modal-body #noticias').val(recipient12)
    modal.find('.modal-body #convidados').val(recipient13)
    modal.find('.modal-body #equipe').val(recipient14)
    modal.find('.modal-body #editaagenda').val(recipient15)

    recipient4 == 1 ? ($("#agenda").prop('checked', true)) : ($("#agendaeditar").prop('checked', false));
    recipient5 == 1 ? $("#mensagens").prop('checked', true) : $("#mensagens").prop('checked', false);
    recipient6 == 1 ? $("#sistema").prop('checked', true) : $("#sistema").prop('checked', false);
    recipient7 == 1 ? $("#fills").prop('checked', true) : $("#fills").prop('checked', false);
    recipient8 == 1 ? $("#atualidades").prop('checked', true) : $("#atualidades").prop('checked', false);
    recipient9 == 1 ? $("#depoimentos").prop('checked', true) : $("#depoimentos").prop('checked', false);
    recipient10 == 1 ? $("#galeria").prop('checked', true) : $("#galeria").prop('checked', false);
    recipient11 == 1 ? $("#programacao").prop('checked', true) : $("#programacao").prop('checked', false);
    recipient12 == 1 ? $("#noticias").prop('checked', true) : $("#noticias").prop('checked', false);
    recipient13 == 1 ? $("#convidados").prop('checked', true) : $("#convidados").prop('checked', false);
    recipient14 == 1 ? $("#equipe").prop('checked', true) : $("#equipe").prop('checked', false);
    recipient15 == 1 ? $("#editaagenda").prop('checked', true) : $("#editaagenda").prop('checked', false); 
    })

</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

</body>
</html>
