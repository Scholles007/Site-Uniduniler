<!DOCTYPE HTML>
<html lang="pt-br">

<head>
        <!-- CAPA DO SITE -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>uniduniler | Atualidades</title>
        <script src="../../dist/js/jquery-3.3.1.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../dist/js/parallax.js"></script>
        <link rel="stylesheet" href="../../dist/css/components/bootstrap.css">
        <link rel="stylesheet" href="../../dist/css/elements/navbar.css">      
        <link rel="stylesheet" href="../../dist/css/elements/footer.css">
        <link rel="stylesheet" href="../../dist/css/projeto.css">
        <link rel="stylesheet" href="../../dist/css/atualidades.css">
        <link rel="stylesheet" href="../../dist/owl/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../../dist/owl/dist/assets/owl.theme.default.min.css">

        
        <style type="text/css"> 
            .texto79{
              text-align: justify-all;
              font-size: 17px;
        </style>

</head>

<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top barranav">
    <div class="container cont">
    <span class="navbar-brand logo">
        <a href="../"><img class="img-responsive" style="width: 227px; height: 92px;" src="../../dist/img/logo2.gif"></a>
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav itembarra">
        <li class="nav-item">
          <a class="nav-link menubarra" style="color: #a7c9ce;" href="../o-projeto/"><p class="nomep">O PROJETO</p></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link menubarra" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">
              <p class="nomep">
                              A AUTORA
              </p>
            
            </a>
            <div class="dropdown-menu menudropdown" aria-labelledby="navbarDropdown">
              <div class="novomenu">

                <a class="dropdown-item" href="../sobre-a-autora/">Biografia</a>
                <a class="dropdown-item" href="../sobre-a-autora/">Blog</a>
                <a class="dropdown-item" href="../sobre-a-autora/">Livros</a>
                <a class="dropdown-item" href="../sobre-a-autora/">Notícias</a>
                <!--a class="dropdown-item" href="../sobre-a-autora/">Agenda</a>
                <a class="dropdown-item" href="../sobre-a-autora/">Contato</a>-->
                </div>
            </div>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link menubarra" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">
              <p class="nomep">OS FESTIVAIS</p>
            </a>
            <div class="dropdown-menu menudropdown" aria-labelledby="navbarDropdown">


                <div class="novomenu">
                <?php
                    
                                       
                require_once('../../sistema/usuario/db.class.php');
                require_once('../../sistema/usuario/fils/to_romano.php');     

                    //require_once('../usuario/fils/to_romano.php');
                         

                    $objDb = new Db();
                    $link = $objDb->conecta_mysql();    
                        
                    $sql = " SELECT * FROM fills order by id desc";
                    $resultado_id = mysqli_query($link, $sql);
                    if($resultado_id){
                        
                        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                            $numero = $registro['id'];
                            $design = $registro['Design'];
                            $edit = $numero + 5;
                            $numeror = numero_romano($numero);

                            echo "<a class='dropdown-item' href='../festivais/festival-bd$design/index.php?id=$numero'> $numeror FESTIVAL </a> ";
                        }
                        
                    }else{
                        echo 'Erro na consulta';
                    }
                ?>

                    
    
                    <a class="dropdown-item"href="../festivais/festival-v/">V FESTIVAL</a>

                    <a class="dropdown-item" href="../festivais/festival-iv/">IV FESTIVAL</a>

                    <a class="dropdown-item" href="../festivais/festival-iii/">III FESTIVAL</a>

                    <a class="dropdown-item" href="../festivais/festival-ii/">II FESTIVAL</a>

                    <a class="dropdown-item" href="../festivais/festival-ii/">I FESTIVAL</a>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link menubarra" href="../atualidades/"><p class="nomep">ATUALIDADES</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link menubarra" href="../../email/"><p class="nomep">FALE CONOSCO</p></a>
        </li>
      </ul>
    </div>
    </div>
</nav><br><br><br><br><br>

    <div class="container">

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-11">
                        <?php
                    
                            require_once('../../sistema/usuario/db.class.php');
                            require_once('../../sistema/usuario/fils/to_romano.php');       
                            //require_once('../usuario/fils/to_romano.php');
                                                         
                            $objDb = new Db();
                            $link = $objDb->conecta_mysql();    
                                                        
                            $id = $_GET['id'];
                            $sql = " SELECT * FROM atualidades WHERE ID = $id";

                            $resultado_id = mysqli_query($link, $sql);
                            if($resultado_id){
                                                        
                            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                $numero = $registro['ID'];
                                $titulo = $registro['Título'];
                                $post = $registro['Postagem'];
                                $capa = $registro['Imagem'];

                                echo "<img src='../../../$capa' class='img-fluid' style='margin-left: 0%;'>";
                                echo "<img src='../../dist/img/galhodireito.png' class='galhod'>";
                                echo "<p>";
                                echo "<span class='titulo23'>$titulo</span><br>";
                                echo "<span class='data23'></span><br>";
                                echo "<p class='conteudo23'>$post</p>";
                                echo "</p>";
                                echo "<a target='__blank' href='../atualidades/atualidades-bd/index.php?id=$numero'>";
        
                                echo "</div>";
                                echo "</a>";
                                echo "<br>";

                                }
                                                        
                                }else{
                                    echo 'Erro na consulta';
                                }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <?php
                    
                            require_once('../../sistema/usuario/db.class.php');
                            require_once('../../sistema/usuario/fils/to_romano.php');       
                            //require_once('../usuario/fils/to_romano.php');
                                                         
                            $objDb = new Db();
                            $link = $objDb->conecta_mysql();    
                                                        
                            $id = $_GET['id'];
                            $certo = $id;
                            $sql = " SELECT * FROM atualidades_galeria WHERE ID_atualidades = $certo";

                            $resultado_id = mysqli_query($link, $sql);
                            if($resultado_id){
                                                        
                            while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                $galeria = $registro['file_name'];

                                echo "<img src='../../../uniduniler/sistema/dist/img/$galeria' class='img-fluid' style='margin-left: 0%;' width=240px; height=auto>";

                                }
                                                        
                                }else{
                                    echo 'Erro na consulta';
                                }
                        ?>
            </div>
        </div>
    </div>

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

</body>