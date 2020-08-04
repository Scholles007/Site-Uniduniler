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

<?php
  $erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Inclui o head -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>uniduniler | ADMINISTRAÇÃO</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <script type="text/javascript">

      $(document).ready( function(){

        function atualiza(){

          $.ajax({
            url: '../usuario/mensagens/show_message.php',
            success: function(data) {
              $('#mensagens').html(data);
            }
          });
        }

        atualiza();

      });

    </script>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

  <!-- Cabeçalho da página -->
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
        <li class="active">
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
        Caixa de Entrada
        <small>Onde tudo começa</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
      <div class="row">
        <div class="col-md-3">
          <a data-toggle="modal" data-target="#ModalEscrever" class="btn btn-primary btn-block margin-bottom">Escrever</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Pastas</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-inbox"></i> Caixa de Entrada
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="enviados.php"><i class="fa fa-envelope-o"></i> Enviados</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Caixa de Entrada</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php
                      require_once('db.class.php');
                      $objDb = new db();
                      $link = $objDb->conecta_mysql();
                      $nomes = $_SESSION['id_usuario'];
                      $email = $_SESSION['Email'];
                      $sql = " SELECT * FROM mensagens where (Nome != $nomes and Email = '$email') ORDER BY ID DESC";
                      $resultado_ids = mysqli_query($link, $sql);
                      if($resultado_ids){
                        while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){?>
                          <tr>
                          <td>
                            <input type="checkbox">
                          </td>
                          <td class="mailbox-star">
                            <a href="#">
                              <i class="fa fa-star text-yellow"></i>
                            </a>
                          </td>
                          <td class="mailbox-name" id="email">
                            <a data-toggle="modal" data-target="#ModalLer"><?php echo $registros['Nome']?></a>
                          </td>
                          <td class="mailbox-subject" id="assunto">
                            <b><?php echo $registros['Assunto'];?></b> - <?php echo $registros['Mensagem'];?>
                          </td>'
                          <td>
                            <a>
                              <div class="item_lista">
                                <span class="fa fa-reply item_lista" data-toggle="modal" data-target="#ModalResponder"
                                data-nome="<?php echo $registros['Nome']; ?>" data-assunto="<?php echo $registros['Assunto']; ?>">
                              </span>
                              </div>
                            </a>
                          </td>
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
                      }?>
                    <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a data-toggle="modal" data-target="#ModalLer">Alessandra</a></td>
                    <td class="mailbox-subject"><b>Mensagem de boas-vindas</b> - Estamos feliz em tê-lo aqui. Seja bem-vindo.
                    </td>
                  </tr>
                  </tbody>
                </table>

                    <div id="ModalApagar" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Apagar Postagem</h4>
                          </div>
                          <form action="../usuario/mensagens/remove_message_received.php" method="POST" enctype="multipart/form-data"> <!--faz o post para o arquivo php-->
                            <div class="modal-body">
                              <label>Tem certeza que deseja apagar esta mensagem?</label>
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
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->

              <!-- Modal Escrever -->
                <div id="ModalEscrever" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Escrever</h4>
                      </div>
                      <form action="mensagens/send_message.php" method="POST" id="mensagem">
                      <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email"
                            required minlength="3">
                                <?php
                                  if($erro_email == 1){
                                    echo '<font style="color:#FF0000">Email não existe</font>';
                                  }
                                ?>
                        </div>
                        <div class="form-group">
                          <label>Sobre</label>
                          <input type="text" name="sobre" class="form-control" placeholder="Sobre"
                          required minlength="3">
                        </div>
                        <div class="form-group">
                          <label>Mensagem</label><br>
                            <textarea class="form-control" name="mensagem" rows="6" placeholder="Mensagem"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                    </form>
                    </div>
                    </div>
                  </div>

              <!-- Modal Ler -->
                <div id="ModalLer" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Responder</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Conteúdo</label>
                          <!-- Onde ficará a mensagem -->
                          <textarea class="form-control" name="mensagem" rows="6" placeholder="Mensagem" disabled></textarea>
                        </div>
                          <div class="form-group">
                            <label>Sobre</label>
                            <input type="text" class="form-control" placeholder="Resposta"
                            required minlength="3">
                          </div>
                        <div class="form-group">
                          <label>Conteúdo</label><br>
                            <textarea class="form-control" name="mensagem" rows="6" placeholder="Mensagem"></textarea>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                    </div>
                  </div>

                  <!--Modal para responder-->
                  <div class="modal fade" id="ModalResponder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="exampleModalLabel">Resposta para </h4>
                        </div>
                        <div class="modal-body">
                          <form action="mensagens/answer_message.php" method="POST">
                            <div class="form-group">
                              <label for="recipient-name" class="control-label">Assunto:</label>
                              <input type="text" class="form-control" name ="sobre" id="sobre">
                              <input type="hidden" class="form-control" id="id" name="id">
                              <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="control-label">Mensagem:</label>
                              <textarea class="form-control" name="mensagem" rows="6" placeholder="Mensagem"></textarea>
                            </div>
                        </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Responder</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                          </div>
                          </form>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"> <a href="mensagens.php"><i class="fa fa-chevron-right"></i></a></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">

      <!-- Rodapé da pagina -->
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

<script type="text/javascript">

    $(document).ready( function(){

      function atualiza(){

        $.ajax({
          url: '../usuario/mensagens/show_to_me.php',
          success: function(data) {
            $('#mensagens').html(data);
          }
        });
      }

      atualiza();

    });
    $('#ModalResponder').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('nome') // Extract info from data-* attributes
      var recipient2 = button.data('assunto') //Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('Resposta para "' + recipient +'"')
      modal.find('.modal-body #id').val(recipient)
      modal.find('.modal-body #email').val(recipient)
      modal.find('.modal-body #sobre').val(recipient2)
    })

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
