<!DOCTYPE HTML>
<html lang="pt-br">

<head>
		<!-- CAPA DO SITE -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>uniduniler | IV FIL</title>
		<script src="../../dist/js/jquery-3.3.1.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../dist/js/parallax.js"></script>
		<link rel="stylesheet" href="../../dist/css/components/bootstrap.css">
		<link rel="stylesheet" href="../../dist/css/elements/navbar.css">
		<link rel="stylesheet" href="../../dist/css/elements/footer.css">
		<link rel="stylesheet" href="../../dist/css/fil4.css">
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
	    <a href="../../"><img class="img-responsive" style="width: 227px; height: 92px;" src="../../dist/img/logo2.gif" alt="UniDuniLer Todas as Letras"></a>
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
	            <a class="dropdown-item" href="../festival-v/">V FESTIVAL</a>
	            <a class="dropdown-item" style="color: gray" href="../festival-iv/">IV FESTIVAL</a>
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
		<div class="col-md-8 ">
			<div class="row">
				<div class="col-md-4" style="margin-bottom: -30%; margin-left: -10%;"><span class="letrao">IV</span></div>
				<div class="col-md-8" style="margin-top: 10%; padding-bottom: 12%; margin-left: 10%;""><img style="object-fit: contain;" src="../../dist/img/festivalit.png" alt="Festival Itinerante de Leitura"></div>
				
			</div>
			<!--<img src="../../dist/img/florempe.png" class="b1 img-fluid">-->
		</div>
		<div class="col-md-4" >
			<div class="row">
				<div class="col-md-12 video2"">
					<div class="responsive">
					<iframe style="min-width: 90%; height: 240px; padding-left: 35%; margin-left: -5% " src="https://www.youtube.com/embed/zkXH4tfcuTc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="row subida">
		<div class="col-md-7">
			<div class="row">
				<div class="col-md-12">
					<img src="../../dist/img/equipe.png" alt="Equipe" class="img-fluid">
					<img src="../../dist/img/peixinho2.png" alt="Desenho de um peixe" class="px2 img-fluid">
					<img src="../../dist/img/peixinho1.png" alt="Desneho de um peixe" class="px1 img-fluid">
					<img src="../../dist/img/peixinho2.png" alt="Desneho de um peixe" class="px3 img-fluid">
					<img src="../../dist/img/peixinhobolha.png" alt="Desenho de bolhas" class="px4 img-fluid">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<b><span class="poppinsextra f1">Coordenação Geral e Curadoria: </b><span class="poppinsextra f1">Alessandra Roscoe</span></span><br>
				<b><span class="poppinsextra f1">Produção Executiva: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
				<b><span class="poppinsextra f1">Direção Artística e Musical: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
				<b><span class="poppinsextra f1">Assistência de Produção: </b><span class="poppinsextra f1">Tiana Oliveira</span></span><br>
				<b><span class="poppinsextra f1">Fotos: </b><span class="poppinsextra f1">Adriana Franzin</span></span><br>
				<b><span class="poppinsextra f1">Filmagens: </b><span class="poppinsextra f1">Ronaldo Rosa e Rogério Verçoza</span></span><br>
				<b><span class="poppinsextra f1">Design e Criação Gráfica: </b><span class="poppinsextra f1">Daniela Gonçalves</span></span><br>
				<b><span class="poppinsextra f1">Design das Pipas Poéticas: </b><span class="poppinsextra f1">Natália Calamari</span></span><br>
				<b><span class="poppinsextra f1">Criação da Logomarca: </b><span class="poppinsextra f1">Aluízio Weber Filho</span></span><br><span class="poppinsextra f1">Assessoria de Imprensa: <span class="poppinsextra f1">Brlz Comunicação</span></span><br>
				<b><span class="poppinsextra f1">Apoiadores: </b><span class="poppinsextra f1">Hplus Hotelaria, Cantina e Pizzaria Don Romanno, Olhar Brasília, Pinheiro Neto Advogados</span></span><br>
				<b><span class="poppinsextra f1">Patrocínio: </b><span class="poppinsextra f1">La Boulangerie</span></span><br>
				<b><span class="poppinsextra f1">Patrocínio: </b><span class="poppinsextra f1">Esta edição foi realizada com campanha de financiamento coletivo Benfeitoria e contou com 138 benfeitores</span></span>

				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12">
					<div class="depoimento2">
						<p class="amaticregular">"Leitores. Ilustradores. Escritores. Até aí, parece que está tudo bem na história. Mas realizar uma performance em que eu, nessa equipe de bons artistas, tivesse uma história minha ilustrada, na hora!? Vi que Alessandra Roscoe, do FIL, tem mesmo aptidão para desafios. Foram dois episódios, na Escola Parque da 508, os dois com essa sensação de inusitado. E sempre com resultados bem aplaudidos pelos leitores-espectadores. O mais bonito é isso: poder ver como nasce uma ilustração, que é o modo de contar histórias mais afinado com aquela meninada. Que venham muitos festivais!"</p>
						<span class="amaticregular">João Bosco Bezerra Bonfim, escritor</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-1">

				</div>
				<div class="col-md-11">
					<div class="row">
						<div class="col-md-12">
							<img src="../../dist/img/alga1.png" alt="Desenho de Algas" style="position: relative;">
							<img src="../../dist/img/alga2.png" alt="Desenho de Algas" style="position: relative; margin-top: 5%;">
							<img src="../../dist/img/alga3.png" alt="Desenho de algas" style="position: relative; margin-top: 12%;">
						</div>
					</div>
					<div class="depoimento4">
						<p class="amaticregular"> " Apesar do passar dos dias, ainda conservo os sentimentos que experimentei no Festival Itinerante de Leitura, fortes e novos para minha alma, de forma que vão me trazer diferentes angulações para a vida e inspiração para textos futuros. Sou muito grato ao Festival por essa oportunidade que me proporcionou, abrindo-me uma pequena ação para o campo social por meio da literatura e dos afetos."</p>
						<span class="amaticregular">João Anzanello Carrascoza, Escritor</span>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-2">
			<img src="../../dist/img/peixaobolha.png" alt="Desenho de bolhas" class="img-fluid">
			<img src="../../dist/img/peixao1.png" alt="Desenho de peixe" class="img-fluid">
			<img src="../../dist/img/peixinho1.png" alt="Desenho de peixe" class="img-fluid">
			<img src="../../dist/img/peixao3.png" alt="Desenho de peixe" class="img-fluid">
			<img src="../../dist/img/peixinho2.png" alt="Desenho de peixe" class="img-fluid">
			<img src="../../dist/img/peixao2.png" alt="Desneho de peixe" class="img-fluid">
		</div>
		<div class="col-md-5">
			<div class="depoimento3">
				<p class="amaticregular">"Posso dizer que voltei para casa diferente, com olhos renovados e inspirados pelas experiências vividas no Festival Itinerante de Leitura!  Estar diante de bebês com seus pais, crianças, adolescentes, professores, artisitas e idosos me fez ter a noção do percurso da palavra andante como faziam nossos ancestrais, soprando histórias antes mesmo dos livros existirem. Volto reconhecendo o tamanho do desejo, com a fome maior que o olho, com as sandálias gastas, com a voz embargada, com as mãos brincantes querendo reescrever o mundo e com a alegria de ter partilhado leituras de onde a vida reserva surpresas."</p>
				<span class="amaticregular">Luciano Pontes, escritor, ilustrador e ator</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-5">
			<!--<div class="depoimento4">
				<p class="amaticregular">"O Festival Itinerante de Leitura convida leitores de todas as idades para uma melhor leitura do mundo. Faz isso mesclando as artes. Reunindo Literatura, Música e Artes Plásticas, amplifica os olhares, a memória, os afetos. Imprime momentos inesquecíveis em todos nós. Torna o mundo mais bonito e solidário aos nossos olhos".</p>
				<span class="amaticregular" style="margin-left: 40%;">Tino Freitas - escritor, mediador de leituras e músico</span>
			</div>-->

		</div>
		<div class="col-md-4">
			<!--
			<img src="../../dist/img/b4.png" class="img-fluid">
			<img src="../../dist/img/sb2.png" class="img-fluid b5 float-right">-->

		</div>
		<div class="col-md-3">
			<img src="../../dist/img/convidados.png" alt="Convidados" class="img-fluid float-right s1">
		</div>
	</div>

	<div class="row">
		<div class="col-md-5 suba2">

		</div>
		<div class="col-md-7">
			<p class="" style="font-size: 23px; text-align: right; margin-top: 30px;">
				<span class="poppinsextra">João Anzanello Carrascoza</span><span class="poppinsextra">(SP), </span>
				<span class="poppinsextra">Luciano Pontes</span><span class="poppinsextra">(PE), </span>
				<b><span class="poppinsextra">Participações Especiais: </b></span>
				<span class="poppinsextra">Adriana Nunes</span><span class="poppinsextra">(DF), </span><br>
				<span class="poppinsextra">Italo Cajueiro</span><span class="poppinsextra">(DF),</span>
				<span class="poppinsextra">Joao Bosco Bezerra Bonfim</span><span class="poppinsextra">(DF),</span>
				<span class="poppinsextra">Natalia Calamari</span><span class="poppinsextra">(SP), </span>
				<span class="poppinsextra">Paepalanthus</span><span class="poppinsextra">(DF),</span>
				<span class="poppinsextra">Rodrigo Mafra</span><span class="poppinsextra">(DF),</span><br>
				<span class="poppinsextra"> e Tino Freitas</span><span class="poppinsextra">(DF),</span>
			</p>
		</div>
	</div>

	<img src="../../dist/img/programacao.png" alt="Programação" class="img-fluid">
	</div>

<div id="carouselExampleIndicators" class="carousel cor2 slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">22.09.2017</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura Partilhada com mulheres e crianças vítimas de violência</span><br>Com Alessandra Roscoe (DF), João Anzanello Carrascoza (SP) e Luciano Pontes (PE)<br>Casa da Mulher Brasileira - SGAN 601 Norte Lote J</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">23.09.2017</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura Sensorial com deficientes visuais do Projeto DV na Trilha</span><br>Centro de Visitantes do Jardim Botânico de Brasília</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/bolhab1.png" alt="Desneho de bolhas" class="img-fluid" style="margin-right: -10%;">
				<img src="../../dist/img/peixaob1.png" alt="Desneho de bolhas" class="img-fluid" style="margin-top: 30%">
				<img src="../../dist/img/peixinhob1.png" alt="Desenho de um peixe pequeno" class="img-fluid">
				<img src="../../dist/img/peixaob1.png" alt="Desenho de eum peixe" class="img-fluid" style="margin-top: 10%; transform: rotateY(180deg);">
				<img src="../../dist/img/peixinhob1.png" alt="Desnenho de um peixe" class="img-fluid">
			</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">24.09.2017</span><br>
      					<span class="poppinsextra textoc">Leitura e Memória com idosos do Projeto Ativar Terceira Idade
      						<br>10h30 às 12h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">08.11.2017</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Encontro de Formação com estudantes de Ensino Médio</span>Oficina de contos de “Terrir”, mistura divertida de terror e humor<br>IFE, São Sebastião - DF</span>
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
      					<span class="marmalade datac">10.11.2017</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Concerto de Leitura e Performances de Ilustração</span><br>
      					Teatro da Escola Parque 308 Sul</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">24.11.2017</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Roda de Leituras, Histórias e Cantigas com Alessandra Roscoe (DF)</span><br>
      						Abrigo Ação Social Promovida - Rua do CAIC, 270 - São Sebastião - DF</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/bolhab1.png" alt="Desenho de bolhas" class="img-fluid" style="margin-right: -10%;">
				<img src="../../dist/img/peixaob1.png" alt="Desenho de um peixe" class="img-fluid" style="margin-top: 30%">
				<img src="../../dist/img/peixinhob1.png" alt="Desenho de um peixe" class="img-fluid">
				<img src="../../dist/img/peixaob1.png" alt="Desenho de um peixe" class="img-fluid" style="margin-top: 10%; transform: rotateY(180deg);">
				<img src="../../dist/img/peixinhob1.png" alt="Desenho de um peixe" class="img-fluid">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">18.12.2017</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura Afetiva com bebês</span><br>
						Creche da Mãe Preta - Parkway - DF</span>
      				</div>
      			</div>
      			<!--<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">29.10.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura sensorial com bebês e crianças especiais</span><br>
      						Centro de Ensino Especial 02 - Ceilândia<br>15h às 17h</span>
      				</div>
      			</div>-->
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
			<img src="../../dist/img/peixinhobolha.png" alt="Desenho de bolhas" style="margin-left: 57%;margin-bottom:-4%;">
			<img src="../../dist/img/peixinho1.png" alt="Desenho de um peixe" style="margin-left: 50%;">

			<img src="../../dist/img/noticiainv.png" alt="Noticias" class="float-right img-fluid" >
		</div>
	</div>
    <div class="row justify-content-center">
		<div class="col-md-2">
			<a target="__blank" href="https://www.youtube.com/watch?v=bzQyniIOfIA">
		        <div class="botao_haha btn-borboleta">
		          <p align="center" class="texto_button33">CERLALC</p>
		        </div>
	        </a>
		</div>
		<div class="col-md-2">
			<a target="__blank" href="http://revistapontocom.org.br/destaques/ler-e-maior-diversao">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button33">RevistaPontoCom</p>
	        </div>
	      </a>
		</div>
		<div class="col-md-2">
			<a target="__blank" href="https://youtu.be/ElEgEEi-9sU">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button33">Olhar Brasília</p>
	        </div>
	      </a>
		</div>
		<div class="col-md-2">
			<a target="__blank" href="https://www.facebook.com/nosofaamarelo/videos/532827450384661/">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button33">Sofá Amarelo</p>
	        </div>
	      </a>
		</div>
		<div class="col-md-2">
			<a target="__blank" href="https://www.facebook.com/luciana.roscoe.1/videos/10200729025946386/">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button33">BAND</p>
	        </div>
	      </a>
		</div>
    </div>
    <br><br>
    <img src="../../dist/img/galeria.png" alt="Galeria" class="img-fluid">

	</div>

	<br><br><br>

	<div class="container-fluid">

	<div class="owl-carousel">
	  <div><a class="example-image-link" href="../../dist/img/fil4/1.png" data-lightbox="example-set"><img src="../../dist/img/fil4/1.png" alt="Crianças brincando com vendas no rosto"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/2.png" data-lightbox="example-set"><img src="../../dist/img/fil4/2.png" alt="Homem pintando um quadro de papel"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/3.png" data-lightbox="example-set"><img src="../../dist/img/fil4/3.png" alt="Homem desenhando o rosto de um homem em um quadro de papel"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/4.png" data-lightbox="example-set"><img src="../../dist/img/fil4/4.png" alt="Fotod e um livro chamado: O menino que via com as mãos"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/5.png" data-lightbox="example-set"><img src="../../dist/img/fil4/5.png" alt="Bebê lendo um livro"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/6.png" data-lightbox="example-set"><img src="../../dist/img/fil4/6.png" alt="homem sorrindo mostrando o desenho de um boneco feito em um quadro de papel"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/7.png" data-lightbox="example-set"><img src="../../dist/img/fil4/7.png" alt="Um idoso lendo com as mãos um livro com o desenho de frutas"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/8.png" data-lightbox="example-set"><img src="../../dist/img/fil4/8.png" alt="Mulheres se abraçando"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/9.png" data-lightbox="example-set"><img src="../../dist/img/fil4/9.png" alt="Duas palestrantes em um palco"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/10.png" data-lightbox="example-set"><img src="../../dist/img/fil4/10.png" alt="Diversas pessoas em frente à câmera posando para a foto"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/11.png" data-lightbox="example-set"><img src="../../dist/img/fil4/11.png" alt="Mulher, rodeada de pessoas, contando histórias"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/12.png" data-lightbox="example-set"><img src="../../dist/img/fil4/12.png" alt="Diversas crianças posando para a câmera"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/13.png" data-lightbox="example-set"><img src="../../dist/img/fil4/13.png" alt="Mulher lendo livro para criânças, todos em pé"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/14.png" data-lightbox="example-set"><img src="../../dist/img/fil4/14.png" alt="Crianças, com sorriso no rosto em com mãos levantadas, em um auditório"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/15.png" data-lightbox="example-set"><img src="../../dist/img/fil4/15.png" alt="Mulher tocando violão para diversas crianças"class="example-image"></a></div>
	  <div><a class="example-image-link" href="../../dist/img/fil4/16.png" data-lightbox="example-set"><img src="../../dist/img/fil4/16.png" alt="Homem em cima de um palco palestrando para diversas crianças"class="example-image"></a></div>
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
