<!DOCTYPE HTML> 
<html lang="pt-br">

<head>
        <!-- CAPA DO SITE -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>uniduniler | O PROJETO</title>
        <script src="../dist/js/jquery-3.3.1.min.js"></script>
        <script src="../dist/js/bootstrap.min.js"></script>
        <script src="../dist/js/parallax.js"></script>
        <link rel="stylesheet" href="../dist/css/components/bootstrap.css">
        <link rel="stylesheet" href="../dist/css/elements/navbar.css">      
        <link rel="stylesheet" href="../dist/css/elements/footer.css">
        <link rel="stylesheet" href="../dist/css/projeto.css">
        <link rel="stylesheet" href="../dist/owl/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../dist/owl/dist/assets/owl.theme.default.min.css">
        <style type="text/css"> 
            .texto79{
              text-align: justify-all;
              font-size: 17px;

}
            .border-primary {
            border-color: rgba(0, 0, 0, 0.075);}
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                
                
                function atualizaFestival(){
                    $.ajax({
                        url: '../sistema/adiciona_festival/adiciona_festival.php',
                        success: function(data){
                            $('#Festival_BD').html(data);
                            
                        }
                    })
                }
                
                
                
                atualizaFestival();                

            });
        </script>

    
    
</head>

<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top barranav">
    <div class="container cont">
    <span class="navbar-brand logo">
        <a href="../"><img class="img-responsive" style="width: 227px; height: 92px;" src="../dist/img/logo2.gif"></a>
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
                <!--<a class="dropdown-item" href="../agenda/">Agenda</a>-->
                <!--<a class="dropdown-item" href="../sobre-a-autora/">Contato</a>-->
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
                require_once('../sistema/usuario/db.class.php');
                require_once('../sistema/usuario/fils/to_romano.php');     
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
                        echo "<a class='dropdown-item' href='../festivais/festival-bd$design/index.php?id=$numero'> $numeror FESTIVAL </a> ";
                    }    
                    }else{
                        echo 'Erro na consulta';
                    }
                ?>
                    <a class="dropdown-item" href="../festivais/festival-v/">V FESTIVAL</a>
                    <a class="dropdown-item" href="../festivais/festival-iv/">IV FESTIVAL</a>
                    <a class="dropdown-item" href="../festivais/festival-iii/">III FESTIVAL</a>
                    <a class="dropdown-item" href="../festivais/festival-ii/">II FESTIVAL</a>
                    <a class="dropdown-item" href="../festivais/festival-i/">I FESTIVAL</a>
                </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link menubarra" href="../atualidades/"><p class="nomep">ATUALIDADES</p></a>
        </li>
        <li class="nav-item">
            <a class="nav-link menubarra" href="../email/"><p class="nomep">FALE CONOSCO</p></a>
        </li>
      </ul>
    </div>
    </div>
</nav>

<!-- Abaixo da navbar -->

<br><br>

<br><br><br>



<div class='alert alert-success' role='alert'>Mensagem enviada com sucesso! Dentro de três dias responderemos!
<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
                    //&times;</span></button></div>

<br><br>

<br><br>


<br><br>

<br><br>

<br><br>

<br><br>

<br><br>





<!-- Footer -->
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
                        <img class="img-responsive" src="../dist/img/insta.png">
                        </a>
                        <a target="__blank" href="https://www.facebook.com/Uni-duni-Ler-Todas-as-Letras-490238471064886/">
                        <img class="img-responsive" src="../dist/img/face.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
</footer>



<!-- fim do arquivo -->
<script src="../dist/js/bootstrap.min.js"></script>
<script src="../dist/owl/dist/owl.carousel.min.js"></script>
<script>            
        function pegaNumero() {
        document.getElementById("Festival_BD").innerHTML = "Hello World";
        }       
           
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            dots:true,
            nav: true,      
            autoplay:true,
            autoplayTimeout:5500,
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
                    items:4,
                    nav:false,
                    loop:true
                }
            }
            
        })
        </script>


</body>
</html>