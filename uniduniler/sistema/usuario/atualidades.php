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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/personalizado.css">
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
        <li>
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
        <li class="active">
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
      Atualidades
      <small>Adicione atualidades ao site!</small>
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
      <h3 class="box-title">Atualidades</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#ModalAdicionar">Adicionar
      </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <div class="container">
        <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
    </div>
    <div class="table-responsive">
    <table id="tabela" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Registro</th>
        <th>Título</th>
        <th>Data</th>
        <th>Descrição</th>
        <th>Editar</th>
        <th>Apagar</th>
      </tr>
      </thead>
      <tbody>
        <?php
        require_once('db.class.php');
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sqls = " SELECT * FROM atualidades";
        $resultado_ids = mysqli_query($link, $sqls);
        if($resultado_ids){
          while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){
            $data = $registros['data'];
            $numero = $registros['ID'];?>
              <tr>
              <td><?php echo $registros['ID'] ?></td>
              <td class="mailbox-name">
                <a data-toggle="modal" data-target="#ModalLer"><?php echo $registros['Título']?></a>
              </td>
              <td class="mailbox-subject">
                <b><?php echo $data?></b>
              </td>
              <td class="mailbox-subject"><?php echo $registros['Postagem']?></td>
              <div class="item_lista">
                    <?php echo "<td><a href='atualidades/edit_page.php?id=$numero'><div class='item_lista'><span class='fa fa-edit item_lista'></span>
                      </div></a></td>";?>
                  </div>
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
    </div>
     <!-- Modal de adição -->
  <div id="ModalAdicionar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionar</h4>
        </div>
        <form action="atualidades/add_atualidades.php" method="POST" enctype="multipart/form-data"> <!--faz o post para o arquivo php-->
          <div class="modal-body">
          <div>
            <label>Data</label>
            <input type="text" name="data" class="form-control" maxlength="10" placeholder="dd/mm/aaaa" onKeyPress="DataHora(event, this)">
          </div>
          <br>
          <div class="form-group">
                  <label>Título</label>
                  <input type="text" name="titulo" class="form-control" placeholder="O título da notícia."
                  required minlength="10">
            </div>
            <div class="form-group">
                <label>Postagem</label>
                <textarea name="postagem" class="form-control" rows="3" placeholder="O que aconteceu?"
                required minlength="200"></textarea>
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="link" class="form-control" placeholder="Link para a notícia"
                  minlength="10" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                <label for="InputFile">Imagem de capa</label>
                <input type="file" id="fileToUpload" name="fileToUpload" size="100">
            </div>
            <div class='alert alert-success' role='alert'>Atente-se à proporção da imagem. O ideal é que seja 16:9. Assim, a visualização será visualmente melhor no Site.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
                //&times;</span></button></div>
            <div class="form-group">
                    <label for="InputFile">Imagens para a Atualidade</label>
                    <input type="file" name="upload_images[]" id="image_file" multiple ><br>
                     <!-- Por que precisamos do id e do accept? -->
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
  <div id="ModalEditar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
                <label>Título</label>
                <input type="text" class="form-control" placeholder="O título da Notícia"
                minlength="10" required>
          </div>
          <div class="form-group">
              <label>Postagem</label>
              <textarea class="form-control" rows="3" placeholder="O que aconteceu?"
               minlength="200" required></textarea>
          </div>
          <div class="form-group">
              <label>Endereço</label>
              <input type="text" class="form-control" placeholder="Link para a notícia"
                minlength="10" required>
          </div>
          <div class='alert alert-success' role='alert'>Atente-se à proporção da imagem. O ideal é que seja 16:9. Assim, a visualização será visualmente melhor no Site.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
                //&times;</span></button></div>
          <div class="form-group">
              <label for="InputFile">Imagem de capa</label>
              <input type="file" id="InputFile">
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <div id="ModalApagar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Apagar Postagem</h4>
        </div>
        <form action="atualidades/rmv_atualidades.php" method="POST" enctype="multipart/form-data"> <!--faz o post para o arquivo php-->
          <div class="modal-body">
            <label>Tem certeza que quer apagar a postagem?</label>
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
<script src="../dist/js/demo.js"></script>
<!-- page script -->
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
