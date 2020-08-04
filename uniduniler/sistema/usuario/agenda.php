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
        $edita_agenda = $registro['P_Edita_Agenda'];
        $atividades = $registro['P_Depoimentos'];
    }
  } else {
    echo 'Erro na consulta dos emails no banco de dados!';
  }
  //pegar os dados da tabela agenda
  $result_events = "SELECT * FROM agenda";
  $resultado_events = mysqli_query($link, $result_events);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>uniduniler | ADMINISTRAÇÃO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/locale/pt-br.js">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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
            <li class="active">
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



      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calendário
        <small>A sua agenda pessoal</small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendario</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <?php
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>

        <div class="col-md-10">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


  <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center">Dados do Evento</h4>
            </div>
            <div class="modal-body">
              <div class="visualizar">
                <dl class="dl-horizontal">
                  <dt>Titulo do Evento</dt>
                  <dd id="title"></dd>
                  <dt>Inicio do Evento</dt>
                  <dd id="start"></dd>
                  <dt>Fim do Evento</dt>
                  <dd id="end"></dd>
                </dl>
                <button class="btn btn-canc-vis btn-warning">Editar</button>
                <button class="btn btn-del-vis btn-danger" data-toggle="modal" data-target="#ModalApagar">Apagar</button>
              </div>
              <div class=form>
                <form class="form-horizontal" method="POST" action="agenda/editaagenda.php">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="title" placeholder="Titulo do Evento" id="title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                    <div class="col-sm-10">
                        <select name="color" class="form-control" id="color">
                        <option value="">Selecione</option>
                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                        <option style="color:#F20000;" value="#F20000">Vermelho</option>
                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                        <option style="color:#1A325F;" value="#1A325F">Azul</option>
                        <option style="color:#007FFF;" value="#007FFF">Azul Celeste</option>
                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                        <option style="color:#228B22;" value="#228B22">Verde</option>
                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                    </div>
                  </div>
                  <input type="hidden" class="form-control" name="id" id="id">
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Salvar Alterações</button>
                      <button type="button" class="btn btn-canc-form btn-danger">Cancelar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="visualizar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center">Dados do Evento</h4>
                </div>
                <div class="modal-body">
                  <div class="visualizar">
                    <dl class="dl-horizontal">
                      <dt>Titulo do Evento</dt>
                      <dd id="title"></dd>
                      <dt>Inicio do Evento</dt>
                      <dd id="start"></dd>
                      <dt>Fim do Evento</dt>
                      <dd id="end"></dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>

      <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Cadastrar Evento</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="agenda/adicionaagenda.php">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" placeholder="Titulo do Evento">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                <div class="col-sm-10">
                    <select name="color" class="form-control" id="color">
                    <option value="">Selecione</option>
                    <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                    <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                    <option style="color:#F20000;" value="#F20000">Vermelho</option>
                    <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                    <option style="color:#1A325F;" value="#1A325F">Azul</option>
                    <option style="color:#007FFF;" value="#007FFF">Azul Celeste</option>
                    <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                    <option style="color:#228B22;" value="#228B22">Verde</option>
                    <option style="color:#8B4513;" value="#8B4513">Marrom</option>
                    <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="ModalApagar" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Apagar Evento</h4>
          </div>
          <form action="agenda/apagaragenda.php" method="POST" enctype="multipart/form-data"> <!--faz o post para o arquivo php-->
            <div class="modal-body">
              <label>Tem certeza que quer apagar o evento?</label>
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

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar -->
<script src="../bower_components/moment/moment.js"></script>
<script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="../bower_components/fullcalendar/dist/locale/pt-br.js"></script>

<!-- Page specific script -->

<script>
  $(function () {
    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }
        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)
        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })
      })
    }
    init_events($('#external-events div.external-event'))
    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    <?php if(($edita_agenda) == '1'){ ?>
    $('#calendar').fullCalendar({
      header  : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'hoje',
        month: 'mês',
        week : 'semana',
        day  : 'dia'
      },
      //Random default events
      events    : [
        {/* EXEMPLO DE EVENTO
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        */},
      ],
      eventLimit: true,
      selectable: true,
      //navLinks: true, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      eventClick: function(event) {
           $('#visualizar #title').text(event.title);
           $('#visualizar #id').text(event.id);
           $('#visualizar #id').val(event.id);
           $('#ModalApagar #id').text(event.id);
           $('#ModalApagar #id').val(event.id);
           $('#visualizar #title').val(event.title);
           $('#visualizar #color').val(event.color);
           $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
           $('#visualizar #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
           $('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
           $('#visualizar #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
           $('#visualizar').modal('show');
           return false;
      },
      selectHelper: true,
      select: function(start, end){
           $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
           $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
           $('#cadastrar').modal('show');
      },
      droppable : true, // this allows things to be dropped onto the calendar !!!
      /*drop      : function (date, allDay) { // this function is called when something is dropped
        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)
        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')
        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }
      }*/
      events: [
            <?php
              while($row_events = mysqli_fetch_array($resultado_events)){
                ?>
                {
                id: '<?php echo $row_events['ID']; ?>',
                title: '<?php echo $row_events['Evento']; ?>',
                start: '<?php echo $row_events['Inicio']; ?>',
                end: '<?php echo $row_events['Termino']; ?>',
                color: '<?php echo $row_events['Cor']; ?>',
                },<?php
              }
            ?>
          ]
    })
    <?php
 }
 else {
 ?>
 $('#calendar').fullCalendar({
   header  : {
     left  : 'prev,next today',
     center: 'title',
     right : 'month,agendaWeek,agendaDay'
   },
   buttonText: {
     today: 'hoje',
     month: 'mês',
     week : 'semana',
     day  : 'dia'
   },
   //Random default events
   events    : [
     {/* EXEMPLO DE EVENTO
       title          : 'All Day Event',
       start          : new Date(y, m, 1),
       backgroundColor: '#f56954', //red
       borderColor    : '#f56954' //red
     */},
   ],
   eventLimit: true,
   selectable: true,
   //navLinks: true, // can click day/week names to navigate views
   editable: false,
   eventLimit: true, // allow "more" link when too many events
   eventClick: function(event) {
        $('#visualizar2 #title').text(event.title);
        $('#visualizar2 #id').text(event.id);
        $('#visualizar2 #id').val(event.id);
        $('#visualizar2 #title').val(event.title);
        $('#visualizar2 #color').val(event.color);
        $('#visualizar2 #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
        $('#visualizar2 #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
        $('#visualizar2 #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
        $('#visualizar2 #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
        $('#visualizar2').modal('show');
        return false;
   },
   selectHelper: true,
   events: [
         <?php
           while($row_events = mysqli_fetch_array($resultado_events)){
             ?>
             {
             id: '<?php echo $row_events['ID']; ?>',
             title: '<?php echo $row_events['Evento']; ?>',
             start: '<?php echo $row_events['Inicio']; ?>',
             end: '<?php echo $row_events['Termino']; ?>',
             color: '<?php echo $row_events['Cor']; ?>',
             },<?php
           }
         ?>
       ]
 })
 <?php
 }
 ?>
    $('.btn-canc-vis').on("click", function(){
      $('.form').slideToggle();
      $('.visualizar').slideToggle();
    });
    $('.btn-canc-form').on("click", function(){
      $('.visualizar').slideToggle();
      $('.form').slideToggle();
    });
    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }
      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)
      //Add draggable funtionality
      init_events(event)
      //Remove event from text input
      $('#new-event').val('')
    })
  })
    //Mascara para o campo data e hora
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
</script>

</body>
</html>
