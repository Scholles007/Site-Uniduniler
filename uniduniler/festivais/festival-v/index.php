<!DOCTYPE HTML>
<html lang="pt-br">

<head>
		<!-- CAPA DO SITE -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>uniduniler | V FIL</title>
		<script src="../../dist/js/jquery-3.3.1.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../dist/js/parallax.js"></script>
		<link rel="stylesheet" href="../../dist/css/components/bootstrap.css">
		<link rel="stylesheet" href="../../dist/css/elements/navbar.css">
		<link rel="stylesheet" href="../../dist/css/elements/footer.css">
		<link rel="stylesheet" href="../../dist/css/fil5.css">
		<link rel="stylesheet" href="../../dist/owl/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../../dist/owl/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../dist/css/lightbox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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

</head>

	<body>

	<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top barranav">
	<div class="container cont">
	<span class="navbar-brand logo">
	    <a href="../../"><img class="img-responsive" style="width: 227px; height: 92px;" src="../../dist/img/logo2.gif"></a>
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
	            <a class="dropdown-item" href="../../sobre-a-autora/#biografia">Biografia</a>
              <a class="dropdown-item" href="../../sobre-a-autora/#blog">Blog</a>
              <a class="dropdown-item" href="../../sobre-a-autora/#livrosnav">Livros</a>
              <a class="dropdown-item" href="../../sobre-a-autora/#noticias">Notícias</a>
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
	            <a class="dropdown-item" style="color: gray" href="../festival-v/">V FESTIVAL</a>
	            <a class="dropdown-item" href="../festival-iv/">IV FESTIVAL</a>
	            <a class="dropdown-item" href="../festival-iii/">III FESTIVAL</a>
	            <a class="dropdown-item" href="../festival-ii/">II FESTIVAL</a>
	            <a class="dropdown-item" href="../festival-i/">I FESTIVAL</a>
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
                            <div class="row"><img src="../../dist/img/festival1-claro.png" style="max-width:100%;"></div>
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
                            <div class="row"><img src="../../dist/img/festival2-claro.png" style="max-width:100%;"></div>
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
                            <div class="row"><img src="../../dist/img/festival3-claro.png" style="max-width:100%;"></div>
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
    <div class="col-md-7" >
      <div class="row">
      <div class="col-md-4" style="margin-bottom: -30%">
        <span  class="letrao">V</span>
      </div>
      <div class="col-md-8" style="margin-top: 10%; padding-bottom: 12% ">
        <img style="object-fit: contain;" src="../../dist/img/festivalit.png" alt="Festival Itinerante de Leitura">
      </div></div>
    </div>
    <div class="col-md-5">
      <div class="row">
        <div class="col-md-12 video2">
          <iframe style="min-width: 90%; height:240px; padding-bottom: 10%" src="https://www.youtube.com/embed/-OI7PsFJmo0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

<div style="margin-top: -8%;">
	<img src="../../dist/img/equipe.png" class="img-fluid">
	<div class="row">
		<div class="col-md-8">
			<b><span class="poppinsextra f1">Coordenação e Curadoria: </b><span class="poppinsextra f1">Alessandra Roscoe</span></span><br>
			<b><span class="poppinsextra f1">Produção Executiva: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
      <b><span class="poppinsextra f1">Direção de Palco e Cena: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Assistência de Produção: </b><span class="poppinsextra f1">Tiana Oliveira</span></span><br>
			<b><span class="poppinsextra f1">Assessoria de imprensa: </b><span class="poppinsextra f1">Território Cultural</span></span><br>
			<b><span class="poppinsextra f1">Textos, fotos e mídias sociais: </b><span class="poppinsextra f1">Adriana Franzin</span></span><br>
			<b><span class="poppinsextra f1">Filmagens: </b><span class="poppinsextra f1">Uniduniler todas as letras</span></span><br>
			<b><span class="poppinsextra f1">Curadoria Uniduniler Jovem: </b><span class="poppinsextra f1">Claudine Duarte</span></span><br>
			<b><span class="poppinsextra f1">Design e Criação Gráfica: </b><span class="poppinsextra f1">Daniela Gonçalves</span></span><br>
			<b><span class="poppinsextra f1">Arte final Banners e Cartazes: </b><span class="poppinsextra f1">Beatriz Socha</span></span><br>
			<b><span class="poppinsextra f1">Design de Pipas Poéticas: </b><span class="poppinsextra f1">Natália Calamari</span></span><br>
			<b><span class="poppinsextra f1">Criação de logomarca: </b><span class="poppinsextra f1">Aluízio Weber Filho</span></span><br>
      <b><span class="poppinsextra f1">Apoiadores: </b><span class="poppinsextra f1">Meliã Hotel, La Boulangerie, Cantina e Pizzaria Don Romano, SESC</span></span><br>
      <b><span class="poppinsextra f1">Patrocínio: </b><span class="poppinsextra f1">Fundo de Apoio à Cultura do Distrito Federal - FAC - Secretaria de Cultura - Governo do Distrito Federal.</span></span>
		</div>
		<div class="com-md-4">
			<img src="../../dist/img/pipav1b.png" class="img-fluid float-left">
		</div>
	</div>
</div>


	<div class="row">
		<div class="col-md-12">
			<img src="../../dist/img/convidados.png" class="img-fluid float-right"><br><br><br><br>
			<p class="" style="font-size: 26px; text-align: right; margin-top: 30px;">
				<span class="poppinsextra">Alex Gomes</span><span class="poppinsextra">(RJ), </span>
				<span class="poppinsextra">Alexandre Rampazo</span><span class="poppinsextra">(SP), </span><br>
				<span class="poppinsextra">Cris Alhadeff</span><span class="poppinsextra">(RJ), </span>
				<span class="poppinsextra">Inesa Markava</span><span class="poppinsextra">(Portugal), </span><br>
				<span class="poppinsextra">Penélope Martins</span><span class="poppinsextra">(SP) e </span>
				<span class="poppinsextra">Raquel Gomes</span><span class="poppinsextra">(Portugal) </span><br>
				<b><span class="poppinsextra">Participações Especiais: </b></span><br>
				<span class="poppinsextra">Adriana Nunes</span><span class="poppinsextra">(DF), </span>
				<span class="poppinsextra">Dad Squarisi</span><span class="poppinsextra">(DF)</span>
				<span class="poppinsextra">Gabriel Guirá</span><span class="poppinsextra">(DF)</span><br>
				<span class="poppinsextra">Roger Mello</span><span class="poppinsextra">(DF)</span>
				<span class="poppinsextra">Romont Willy</span><span class="poppinsextra">(DF)</span>
				<span class="poppinsextra">e Tino Freitas</span><span class="poppinsextra">(DF)</span>
			</p>
		</div>
	</div>

	<img src="../../dist/img/programacao.png" class="img-fluid">
</div>

<div id="carouselExampleIndicators" class="carousel cor2 slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">18.06.2018</span><br>
      					<span class="poppinsextra textoc">Caixinha de guardar o tempo - Leitura e memória<br>
                Encontro de formação - Leituras afetivas com idosos e crianças<br>
                Com Alessandra Roscoe<br>
                Local: Centro de Convivência São Sebastião - DF - 14h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">18.06.2018</span><br>
      					<span class="poppinsextra textoc">Revoada Poética - Abertura Oficial do V FIL<br>
Com Alessandra Roscoe<br>
Local: Praça do Centro de Convivência São Sebastião - DF - 17h</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/pipav1.png" class="img-fluid" style="margin-top: 15%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">25.06.2018</span><br>
      					<span class="poppinsextra textoc">Roda de Leituras<br>
Encontro de Formação - Uniduniler Jovem<br>
Com Alessandra Roscoe e Tino Freitas<br>
Local: CEF 15 Gama-DF - 15h</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">12.07.2018</span><br>
      					<span class="poppinsextra textoc">Nos fios das palavras, memórias bordadas.<br>
Com Alessandra Roscoe<br>
Leituras partilhadas com idosos do Ativar Terceira idade<br>
Local: Salão de Atividades do Condomínio Jardim Botânico VI - 8h30</span>
      				</div>
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
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">02.08.2018</span><br>
      					<span class="poppinsextra textoc">Leituras Afetivas: No ventre, no colo em todo lugar é sempre tempo de partilhar, histórias e tecer memórias.<br>
Encontro de Formação Leitura com Bebês Com Alessandra Roscoe, Inessa Markava e Raquel Gomes<br>
Local: Auditório do Museu da República - 10h</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">02.08.2018</span><br>
      					<span class="poppinsextra textoc">Apresentações: Leituras sensoriais para bebês: Experimente a palavra!<br>
Com Alessandra Roscoe, Inessa Markava, Raquel Gomes.
Local: Auditório do Museu da República - 14h</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/pipav1.png" class="img-fluid" style="margin-top: 15%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">03.08.2018</span><br>
      					<span class="poppinsextra textoc">Show Literário: Tudo o que cabe num livro!<br>
Com Adriana Nunes, Alessandra Roscoe, Alex Gomes,
Cris Alhadeff, Dad Squarisi, Gabriel Guirá, Roger Mello e
Romont Willy.<br>
Local: Teatro da Escola Parque 308 Sul - 14h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">04.08.2018</span><br>
      					<span class="poppinsextra textoc">Para ler com todos os sentidos - Leituras sensoriais!<br>
Com Alessandra Roscoe, Alex Gomes, Cris Alhadef,
Inessa Markava, Raquel Gomes.<br>
Local: Lar Vila do Pequenino Jesus QI 26 - Chácara 27 Lago Sul - 15h</span>
      				</div>
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
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">05.08.2018</span><br>
      					<span class="poppinsextra textoc">Semeando leituras, plantando histórias, fazendo
brotar afetos!<br>
Com Alessandra Roscoe, Alex Gomes, Cris Alhadef,
Inessa Markava, Raquel Gomes<br>
Leituras partilhadas com mulheres e crianças em acampamento rural<br>
Local: Acampamento Tiradentes Capão - 10h30<br>
Comprido Área Rural de São Sebastião - DF</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">06.08.2018</span><br>
      					<span class="poppinsextra textoc">Ler, imaginar, voar!
Com Alessandra Roscoe,
Inessa Markava, Raquel Gomes<br>
Leituras afetivas com mulheres e crianças
vítimas da violência, sob proteção do Estado  - 10h30</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/pipav1.png" class="img-fluid" style="margin-top: 15%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">08.08.2018</span><br>
      					<span class="poppinsextra textoc">Terapia da palavra - Leituras afetivas, música
e histórias nas incubadoras.<br>
Com Alessandra Roscoe,
Inessa Markava, Raquel Gomes<br>
Local: Neomatologia e alas de internação no
Hospital Regional da Ceilância - DF - 10h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">16.08.2018</span><br>
      					<span class="poppinsextra textoc">Eu leio o mundo em todos os sentidos!
Com Alessandra Roscoe<br>
Leitura Sensorial com bebês cegos<br>
Local: CEEDV 612 Sul - 9h</span>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </div>

    <!-- 4 -->
    <div class="carousel-item">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">24.08.2018</span><br>
      					<span class="poppinsextra textoc">Para ler o mundo - Caixinha de guardar o tempo - Encontro de gerações!
Com Alessandra Roscoe, Alexandre Rampazo e Penélope Martins<br>
Leituras partilhadas com netos e avós alinhavando memórias,
costurando histórias!<br>
Local: Obra Social Santa Isabel - Brazlândia - DF  - 15h</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">25.08.2018</span><br>
      					<span class="poppinsextra textoc">Brincar de ler!
Com Alessandra Roscoe, Alexandre Rampazo e Penélope Martins<br>
Leituras sensoriais para bebês com necessidades especiais<br>
Local: CEI 04 de Taguatinga - DF  - 10h30</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/pipav1.png" class="img-fluid" style="margin-top: 15%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">26.08.2018</span><br>
      					<span class="poppinsextra textoc">Lavra palavra!
Com Alessandra Roscoe, Alexandre Rampazo
e Penélope Martins<br>
Roda de Leituras, histórias e cantigas<br>
Local: Calangos Leitores - CEF 15 - Gama - 10h30</span>
      				</div>
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
			<img src="../../dist/img/noticiainv.png" class="float-right img-fluid" >
		</div>
	</div>
    <div class="row justify-content-center">
			<div class="col-md-2 col-sm-2">
          <a target="__blank" href="https://www.youtube.com/watch?v=mEZSG0ui-Bw&feature=youtu.be">
            <div class="botao_haha btn-borboleta">
              <p align="center" class="texto_button33">TV Supren</p>
            </div>
          </a>
			</div>
		<div class="col-md-2 col-sm-2">
			<a target="__blank" href="http://ociclorama.com/festival-de-leitura-uniduniler/">
		        <div class="botao_haha btn-borboleta">
		          <p align="center" class="texto_button33">Ociclorama</p>
		        </div>
	        </a>
		</div>
		<div class="col-md-2 col-sm-2">
			<a target="__blank" href="http://www.publishnews.com.br/materias/2018/07/23/caravana-da-leitura">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button33">Publishnews</p>
	        </div>
	      </a>
		</div>
		<div class="col-md-2 col-sm-2">
      <a target="__blank" href="https://www.destakjornal.com.br/agenda-d-a/brasilia/detalhe/projeto-leva-literatura-a-creches-e-hospitais?ref=DET_destaqueshp_recife">
            <div class="botao_haha btn-borboleta">
              <p align='center' class='texto_button33'>Destak</p>
            </div>
          </a>

		</div>
    <div class="col-md-2 col-sm-2">
      <a target="__blank" href="http://tv.r7.com/record-tv/distrito-federal/df-record/videos/festival-itinerante-leva-leitura-musica-e-arte-para-criancas-no-df-02082018">
            <div class="botao_haha btn-borboleta">
              <p align="center" class="texto_button33">R7.com</p>
            </div>
          </a>

    </div>
    </div>
	</div><br><br>


<div class="container">

    <img src="../../dist/img/galeria.png" class="img-fluid float-left">

</div>

	<br><br><br><br><br>

	<div class="container-fluid">

	<div class="owl-carousel">
	  <div><a class="example-image-link" href="../../dist/img/fil5/1.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/1.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/2.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/2.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/3.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/3.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/4.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/4.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/5.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/5.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/6.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/6.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/7.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/7.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/8.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/8.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/9.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/9.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/10.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/10.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/11.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/11.jpeg" style="width:255px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/12.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/12.jpeg" style="width:453px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/13.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/13.jpeg" style="width:474px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/14.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/14.jpeg" style="width:453px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/15.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/15.jpeg" style="width:340px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/16.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/16.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/17.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/17.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/18.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/18.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/19.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/19.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/20.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/20.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/21.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/21.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/22.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/22.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/23.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/23.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/24.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/24.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/25.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/25.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/26.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/26.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/27.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/27.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/28.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/28.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/29.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/29.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/30.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/30.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/31.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/31.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/32.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/32.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/33.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/33.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/34.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/34.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/35.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/35.jpeg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/36.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/36.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/37.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/37.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/38.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/38.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/39.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/39.jpeg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/40.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/40.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/41.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/41.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/42.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/42.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/43.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/43.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/44.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/44.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/45.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/45.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/46.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/46.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/47.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/47.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/48.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/48.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/49.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/49.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/50.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/50.jpg" style="width:604px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/51.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/51.jpg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/52.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/52.jpeg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/53.jpg" data-lightbox="example-set"><img src="../../dist/img/fil5/53.jpeg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/54.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/54.jpeg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/56.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/56.jpeg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/57.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/57.jpeg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/58.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/58.jpeg" style="width:514px;"class="example-image"></a> </div>

    <div><a class="example-image-link" href="../../dist/img/fil5/59.jpeg" data-lightbox="example-set"><img src="../../dist/img/fil5/59.jpeg" style="width:514px;"class="example-image"></a> </div>

  </div>
  <div class="owl-controls">
        <div class="owl-nav">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
        </div>
    </div>
	</div>
</div>
	<br>

</section>

<footer class="footer">
        <div class="container">
            <div class="row menu1">
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="area1">
                        <span class="titulo poppinsextra">Uniduniler - Todas as Letras</span>
                        <span>uniduniler@uniduniler.com.br</span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="area2">
                        
                        <a target="__blank" href="https://www.instagram.com/unidunilertodasasletras/?hl=pt-br">
                        <img class="img-responsive" src="../../dist/img/insta.png">
                        </a>
                        <a target="__blank" href="https://www.facebook.com/Uni-duni-Ler-Todas-as-Letras-490238471064886/">
                        <img class="img-responsive" src="../../dist/img/face.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2"><a href="../../atualidades/" target="__blank">
                    <button type="button" class="botaoblog btn btn-outline-secondary idBotaoVem">Vem visitar o blog!  </button></a></div>
            </div>
        </div>
    </footer>


		<!-- fim do arquivo -->
		<script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../dist/js/lightbox.min.js"></script>
		<script src="../../dist/owl/dist/owl.carousel.min.js"></script>
		<script>
			$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:true,
          navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
					autoWidth:true,
			    autoplay:true,
    			autoplayTimeout:3000,
			    responsive:{
			        0:{
			            items:1,
			        },
			        600:{
			            items:3,
			        },
			        1000:{
			            items:5,
			        }
			    }
			})
		</script>

	</body>


</html>
