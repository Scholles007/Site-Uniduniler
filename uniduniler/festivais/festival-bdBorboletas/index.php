<!DOCTYPE HTML>
<html lang="pt-br">

<head>
        <!-- CAPA DO SITE -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>uniduniler | I FIL</title>
        <script src="../../dist/js/jquery-3.3.1.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../dist/js/parallax.js"></script>
        <link rel="stylesheet" href="../../dist/css/components/bootstrap.css">
        <link rel="stylesheet" href="../../dist/css/elements/navbar.css">
        <link rel="stylesheet" href="../../dist/css/elements/footer.css">
        <link rel="stylesheet" href="../../dist/css/fil.css">
        <link rel="stylesheet" href="../../dist/owl/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../../dist/owl/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="../../dist/css/lightbox.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="../../dist/owl/dist/assets/owl.theme.default.min.css">
        <style type="text/css">
            .owl-nav i {
              font-size: 52px;
              color:rgb(167,201,206);
              /*background-color: white;*/
              filter: opacity(90%);
            }

            .owl-prev {
                width: 15px;
                height: 100px;
                position: absolute;
                top: 40%;
                margin-left: -15px;
            }

            .owl-next {
                width: 15px;
                height: 100px;
                position: absolute;
                top: 40%;
                right: -0px;
            }

        </style>
        <script type="text/javascript">

            $(document).ready(function(){



                function atualizaColab(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_colab.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_colab').html(data);

                        }
                    })
                }

                function atualizaConvidados(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_convidados.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_convidados').html(data);

                        }
                    })
                }

                function atualizaProgramação1(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação1.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação1').html(data);
                        }
                    })
                }

                function atualizaProgramação2(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação2.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação2').html(data);
                        }
                    })
                }

                function atualizaProgramação3(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação3.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação3').html(data);
                        }
                    })
                }

                function atualizaProgramação4(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação4.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação4').html(data);
                        }
                    })
                }

                function atualizaProgramação5(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação5.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação5').html(data);
                        }
                    })
                }

                function atualizaProgramação6(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação6.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação6').html(data);
                        }
                    })
                }

                function atualizaProgramação7(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação7.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação7').html(data);
                        }
                    })
                }

                function atualizaProgramação8(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação8.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação8').html(data);
                        }
                    })
                }

                function atualizaProgramação9(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação9.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação9').html(data);
                        }
                    })
                }

                function atualizaProgramação10(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação10.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação10').html(data);
                        }
                    })
                }

                function atualizaProgramação11(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação11.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação11').html(data);
                        }
                    })
                }

                function atualizaProgramação12(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação12.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação12').html(data);
                        }
                    })
                }

                function atualizaProgramação13(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação13.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação13').html(data);
                        }
                    })
                }

                function atualizaProgramação14(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação14.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação14').html(data);
                        }
                    })
                }

                function atualizaProgramação15(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação15.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação15').html(data);
                        }
                    })
                }

                function atualizaProgramação16(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação16.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação16').html(data);
                        }
                    })
                }

                function atualizaProgramação17(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação17.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação17').html(data);
                        }
                    })
                }

                function atualizaProgramação18(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação18.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação18').html(data);
                        }
                    })
                }

                function atualizaProgramação19(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação19.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação19').html(data);
                        }
                    })
                }

                function atualizaProgramação20(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_programação20.php?id=<?php echo $_GET["id"]?>',
                        success: function(data){
                            $('#pega_programação20').html(data);
                        }
                    })
                }

                function atualizaFestival(){
                    $.ajax({
                        url: '../../sistema/adiciona_festival/adiciona_Festival.php',
                        success: function(data){
                            $('#Festival_BD').html(data);

                        }
                    })
                }

                atualizaColab();
                atualizaFestival();
                atualizaConvidados();
                atualizaProgramação1();
                atualizaProgramação2();
                atualizaProgramação3();
                atualizaProgramação4();
                atualizaProgramação5();
                atualizaProgramação6();
                atualizaProgramação7();
                atualizaProgramação8();
                atualizaProgramação9();
                atualizaProgramação10();
                atualizaProgramação11();
                atualizaProgramação12();
                atualizaProgramação13();
                atualizaProgramação14();
                atualizaProgramação15();
                atualizaProgramação16();
                atualizaProgramação17();
                atualizaProgramação18();
                atualizaProgramação19();
                atualizaProgramação20();

            });
        </script>
</head>

    <body>

    <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top barranav">
    <div class="container cont">
    <span class="navbar-brand logo">
        <a href="../../"><img class="img-responsive" style="width: 227px; height: 92px;" src="../../dist/img/logo2.gif" alt="UniDuniLer todas as letras"></a>
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav itembarra">
        <li class="nav-item">
          <a class="nav-link menubarra" href="../../o-projeto/"><p class="nomep">O PROJETO</p></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link menubarra" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">
              <p class="nomep">A AUTORA</p>
            </a>
            <div class="dropdown-menu menudropdown" aria-labelledby="navbarDropdown">
              <div class="novomenu">
                <a class="dropdown-item" href="../../sobre-a-autora/">Biografia</a>
                <a class="dropdown-item" href="../../sobre-a-autora/">Blog</a>
                <a class="dropdown-item" href="../../sobre-a-autora/">Livros</a>
                <a class="dropdown-item" href="../../sobre-a-autora/">Notícias</a>
                <!--<a class="dropdown-item" href="../../sobre-a-autora/">Agenda</a>
                <a class="dropdown-item" href="../../sobre-a-autora/">Contato</a>-->
                </div>
            </div>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link menubarra" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">
              <p class="nomep" style="color: #a7c9ce;">OS FESTIVAIS</p>
            </a>
            <div class="dropdown-menu menudropdown" aria-labelledby="navbarDropdown">
              <div class="novomenu">
                <?php
                require_once('../../sistema/usuario/db.class.php');
                require_once('../../sistema/usuario/fils/to_romano.php');
                $objDb = new Db();
                $link = $objDb->conecta_mysql();
                $sql = " SELECT * FROM fills where id order by id desc";
                $resultado_id = mysqli_query($link, $sql);
                if($resultado_id){
                while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                        $numero = $registro['id'];
                        $design = $registro['Design'];
                        $edit = $numero + 5;
                        $numeror = numero_romano($edit);
                        echo "<a class='dropdown-item' href='../festival-bd$design/index.php?id=$numero'> $numeror FESTIVAL </a> ";
                    }
                    }else{
                        echo 'Erro na consulta';
                    }
                ?>
                <a class="dropdown-item" href="../festival-v/">V FESTIVAL</a>
                <a class="dropdown-item" href="../festival-iv/">IV FESTIVAL</a>
                <a class="dropdown-item" href="../festival-iii/">III FESTIVAL</a>
                <a class="dropdown-item" href="../festival-ii/">II FESTIVAL</a>
                <a class="dropdown-item" style="color: gray" href="../festival-i/">I FESTIVAL</a>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link menubarra" href="../../atualidades"><p class="nomep">ATUALIDADES</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link menubarra" href="../../email/"><p class="nomep">FALE CONOSCO</p></a>
        </li>
      </ul>
    </div>
    </div>
</nav>

<br><br><br><br>


    <div id="carousel2" class="carousel sppa cor3 slide" data-ride="carousel" style="background-color: rgb(167,201,206)">
          <ol class="carousel-indicators">
            <li data-target="#carousel2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel2" data-slide-to="1"></li>
            <li data-target="#carousel2" data-slide-to="2"></li>
          </ol>
        <div class="carousel-inner" >
            <!--1 Slide-->
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="texto79">
                                    <h5 class="poppinsextra record" style="color: white"><br> O Festival é</h5>
                                </div>
                            </div>
                            <div class="row"><img src="../../dist/img/festival1-claro.png" style="max-width:100%; object-fit: cover;"></div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="texto79">
                                <p class="poppinsextra record" style="text-align: center;" ><i style="color: white" ><br> Integrar diferentes públicos, juntar leitura e diversão, escritores e desenhistas com seus leitores e,<br> semear literatura era um sonho antigo da escritora Alessandra Roscoe. Desse desejo, surgiu, em<br> 2013, o Festival Itinerante de Leitura -  Uniduniler Todas as Letras.<br><br></i></p>
                            </div>
                            </div>
                        <div class="col-md-2"style="background-color: rgb(167,201,206)">

                        </div>
                    </div>
                </div>
            </div></div>
            <!--2 Slide-->
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="texto79">
                                    <h5 class="poppinsextra record" style="color: white"><br> O Festival é</h5>
                                </div>
                            </div>
                            <div class="row"><img src="../../dist/img/festival2-claro.png" style="max-width:100%; object-fit: cover;"></div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="texto79">
                                <p class="poppinsextra record" style="text-align: center;" ><i style="color: white" ><br> Para levar literatura de forma lúdica e divertida a lugares onde ela nem sempre chega, o Festival<br> Itinerante de Leitura e sua caravana de convidados especiais realiza piqueniques literários, shows<br> de histórias, cantigas e revoadas poéticas, além de muitas leituras!<br><br><br></i></p>
                            </div>
                            </div>
                        <div class="col-md-2"style="background-color: rgb(167,201,206)">

                        </div>
                    </div>
                </div>
            </div></div>
            <!--3 Slide-->
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="texto79">
                                    <h5 class="poppinsextra record" style="color: white"><br> O Festival é</h5>
                                </div>
                            </div>
                            <div class="row"><img src="../../dist/img/festival3-claro.png" style="max-width:100%; object-fit: cover;"></div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="texto79">
                                <p class="poppinsextra record" style="text-align: center;" ><i style="color: white" ><br> Em todas as edições do Festival, a caravana poética de escritores e ilustradores percorre creches,<br> escolas, asilos, hospitais e abrigos. As ações que levam livros e leituras afetivas a bebês, idosos,<br> pessoas hospitalizadas, cegos, autistas, mulheres vítimas de violência e mesmo àqueles que não<br> sabem ler, mas se encantam com uma voz leitora, já beneficiaram mais de 6 mil pessoas. <br><br></i></p>
                            </div>
                            </div>
                        <div class="col-md-2"style="background-color: rgb(167,201,206)">

                        </div>
                    </div>
                </div>
            </div></div>
        </div>
          <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>


<section class="tudo">

<div class="container">
    <div class="row">
        <div class="col-md-7 letra">
            <span class="letrao"><?php echo $numeror ?></span>
            <img style="padding:0 0 30% 3%;" src="../../dist/img/festivalit.png" alt="Festival Itinerante de Leitura">
            <img src="../../dist/img/sbabb.png" class="b1 img-fluid" alt="Duas Borboletas">
        </div>
        <div class="col-md-5">
            <?php
                        require_once('../../sistema/usuario/db.class.php');
                        require_once('../../sistema/usuario/fils/to_romano.php');


                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();


                        $id = $_GET['id'];
                        $certo = 4*$id - 2;

                        $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);

                        if($resultado_id){

                            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                $autor = $registro['Autor'];
                                $depoimento = $registro['Depoimento'];
                                echo "<div class='depoimento2'>";
                                echo '<p class="amaticregular">'.$depoimento.'</p>';
                                echo '<span class="amaticregular">'.$autor.'</span>';
                                echo "</div>";
                            }

                        }else{
                            echo 'Erro na consulta';
                        }
                    ?>
           <?php
                        require_once('../../sistema/usuario/db.class.php');
                        require_once('../../sistema/usuario/fils/to_romano.php');


                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();


                        $id = $_GET['id'];
                        $certo = 4*$id - 3;

                        $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);

                        if($resultado_id){

                            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                $autor = $registro['Autor'];
                                $depoimento = $registro['Depoimento'];
                                echo "<div class='depoimento21'>";
                                echo '<p class="amaticregular">'.$depoimento.'</p>';
                                echo '<span class="amaticregular">'.$autor.'</span>';
                                echo "</div>";
                            }

                        }else{
                            echo 'Erro na consulta';
                        }
                    ?>
        </div>
    </div>

    <img src="../../dist/img/equipe.png" alt="Equipe" class="img-fluid">

    <div class="row">
        <div class="col-md-6">
          <div id = "pega_colab"></div>
        </div>
        <div class="col-md-1"><img src="../../dist/img/sb2.png" alt="Borboletas" class="b2 img-fluid"><img src="../../dist/img/b4.png" class="b3 img-fluid" alt="Uma borboleta"></div>
        <div class="col-md-5">
            <?php
                        require_once('../../sistema/usuario/db.class.php');
                        require_once('../../sistema/usuario/fils/to_romano.php');


                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();


                        $id = $_GET['id'];
                        $certo = 4*$id - 1;

                        $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);

                        if($resultado_id){

                            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                $autor = $registro['Autor'];
                                $depoimento = $registro['Depoimento'];
                                echo "<div class='depoimento3'>";
                                echo '<p class="amaticregular">'.$depoimento.'</p>';
                                echo '<span class="amaticregular">'.$autor.'</span>';

                            }

                        }else{
                            echo 'Erro na consulta';
                        }
                    ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <?php
                        require_once('../../sistema/usuario/db.class.php');
                        require_once('../../sistema/usuario/fils/to_romano.php');


                        $objDb = new Db();
                        $link = $objDb->conecta_mysql();


                        $id = $_GET['id'];
                        $certo = 4*$id;

                        $sql = " SELECT * FROM fills_depoimentos WHERE ID = $certo";
                        $resultado_id = mysqli_query($link, $sql);

                        if($resultado_id){

                            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                $autor = $registro['Autor'];
                                $depoimento = $registro['Depoimento'];
                                echo "<div class='depoimento4'>";
                                echo '<p class="amaticregular">'.$depoimento.'</p>';
                                echo '<span class="amaticregular">'.$autor.'</span>';
                                echo "</div>";
                            }

                        }else{
                            echo 'Erro na consulta';
                        }
                    ?>
        </div>
        <div class="col-md-4">
            <img src="../../dist/img/b4.png" alt="Uma borboleta" class="img-fluid">
            <img src="../../dist/img/sb2.png" alt="Duas borboletas" class="img-fluid b5 float-right">
        </div>
        <div class="col-md-3">
            <img src="../../dist/img/convidados.png" alt="Convidados" class="img-fluid float-right s1">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="" style="font-size: 26px; text-align: right; margin-top: 30px;">
                <div id = "pega_convidados"></div>
            </p>
        </div>
    </div>

    <img src="../../dist/img/programacao.png" alt="Programação" class="img-fluid">
    </div>

<div id="carouselExampleIndicators" class="carousel cor2 slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                  <div id="pega_programação1"></div>
                </div>
                <div class="row">
                  <div id="pega_programação2"></div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
            </div>
            <div class="col-md-4">
                <div class="row">
                   <div id="pega_programação3"></div>
                </div>
                <div class="row">
                   <div id="pega_programação4"></div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- 2 -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div id="pega_programação5"></div>
                </div>
                <div class="row">
                    <div id="pega_programação6"></div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div id="pega_programação7"></div>
                </div>
                <div class="row">
                   <div id="pega_programação8"></div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <!-- 3 -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div id="pega_programação9"></div>
                </div>
                <div class="row">
                   <div id="pega_programação10"></div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
            </div>
            <div class="col-md-4">
                <div class="row">
                   <div id="pega_programação11"></div>
                </div>
                <div class="row">
                    <div id="pega_programação12"></div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div id="pega_programação13"></div>
                </div>
                <div class="row">
                   <div id="pega_programação14"></div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
            </div>
            <div class="col-md-4">
                <div class="row">
                   <div id="pega_programação15"></div>
                </div>
                <div class="row">
                    <div id="pega_programação16"></div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div id="pega_programação17"></div>
                </div>
                <div class="row">
                   <div id="pega_programação18"></div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
            </div>
            <div class="col-md-4">
                <div class="row">
                   <div id="pega_programação19"></div>
                </div>
                <div class="row">
                    <div id="pega_programação20"></div>
                </div>
            </div>
        </div>
      </div>
    </div>



  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="../../dist/img/noticiainv.png" alt="Notícias" class="float-right img-fluid" >
        </div>
    </div>
    <div class="row justify-content-center">
        <?php
    require_once('../../sistema/usuario/db.class.php');
    require_once('../../sistema/usuario/fils/to_romano.php');


    $objDb = new Db();
    $link = $objDb->conecta_mysql();


    $id = $_GET['id'];

    $sql = " SELECT * FROM fills_notícias WHERE ID_noticias =$id and Nome != ''";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){

        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
            $nome = $registro['Nome'];
            $link = $registro['Link'];

            echo "<div class='col-md-2'>";
            echo "<a target='__blank' href='$link'>";
            echo "<div class='botao_haha btn-borboleta'>";
            echo "<p align='center' class='texto_button'>$nome</p>";
            echo "</div>";
            echo "</a>";
            echo "</div>";

        }

    }else{
        echo 'Erro na consulta';
    }
?>

    </div>
    <br><br>
    <img src="../../dist/img/b4.png" alt="Uma borboleta" class="img-fluid borboleta34">
    <img src="../../dist/img/galeria.png" alt="Galeria" class="img-fluid float-left">

</div>

    <br><br><br>

    <div class="container-fluid">
         <div class="owl-carousel">

                        <?php
                            require_once('../../sistema/usuario/db.class.php');
                            require_once('../../sistema/usuario/fils/to_romano.php');
                            //require_once('../usuario/fils/to_romano.php');

                            $objDb = new Db();
                            $link = $objDb->conecta_mysql();

                            $id = $_GET['id'];
                            $sql = " SELECT * FROM fills_galeria WHERE ID_fills = $id";

                            $resultado_id = mysqli_query($link, $sql);
                            if($resultado_id){

                            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                $galeria = $registro['file_name'];

                                echo "<div>";
                                echo "<a class='example-image-link' href='../../../uniduniler/sistema/dist/img/$galeria' data-lightbox='example-set'><img src='../../../uniduniler/sistema/dist/img/$galeria' alt='Diversos balões voando para o céu' class='example-image'></a>";
                                echo  "</div>";

                                }

                                }else{
                                    echo 'Erro na consulta';
                                }
                        ?>
    </div>

    </div>
</div>
    <br><br>

</section>

<div class="container">
  <br>
    <div class="row justify-content-md-center">
            <a href="../../atualidades/" target="__blank">
            <button type="button" class="botaoblog btn btn-outline-secondary idBotaoVem">Vem visitar o blog!</button>
            </a>
    </div>
</div>
<br>

        <footer class="footer">
        <div class="container">
            <div class="row menu1">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="area1">
                        <span class="titulo poppinsextra">Uniduniler - Todas as Letras</span>
                        <span>uniduniler@uniduniler.com.br</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="area2">
                        <a target="__blank" href="https://www.instagram.com/unidunilertodasasletras/?hl=pt-br">
                        <img class="img-responsive" src="../../dist/img/insta.png">
                        </a>
                        <a target="__blank" href="https://www.facebook.com/Uni-duni-Ler-Todas-as-Letras-490238471064886/">
                        <img class="img-responsive" src="../../dist/img/face.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </footer>


        <!-- fim do arquivo -->
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../dist/owl/dist/owl.carousel.min.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dots:true,
                autoplay:true,
                autoplayTimeout:3000,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:3,
                        nav:true
                    },
                    1000:{
                        items:5,
                        nav:true,
                        loop:true
                    }
                }
            })
        </script>

    </body>


</html>
