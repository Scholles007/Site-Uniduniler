<!DOCTYPE HTML>
<html lang="pt-br">

<head>
		<!-- CAPA DO SITE -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>uniduniler | III FIL</title>
		<script src="../../dist/js/jquery-3.3.1.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../dist/js/parallax.js"></script>
		<link rel="stylesheet" href="../../dist/css/components/bootstrap.css">
		<link rel="stylesheet" href="../../dist/css/elements/navbar.css">
		<link rel="stylesheet" href="../../dist/css/elements/footer.css">
		<link rel="stylesheet" href="../../dist/css/fil3.css">
		<link rel="stylesheet" href="../../dist/owl/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../../dist/owl/dist/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="../../dist/css/lightbox.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<style type="text/css">
			.owl-nav i {
			  font-size: 52px;
			  color:#7d979b;
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
	            <a class="dropdown-item" href="../festival-iv/">IV FESTIVAL</a>
	            <a class="dropdown-item" style="color: gray" href="../festival-iii/">III FESTIVAL</a>
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
		<div class="col-md-7 ">
			<div class="row">
				<div class="col-md-4" style="margin-bottom: -30%; margin-left:-5%"><span class="letrao">III</span></div>
				<div class="col-md-8"><img  style="padding:0 0 30% 3%; object-fit: contain; margin-top: 10%; margin-left: -5%" src="../../dist/img/festivalit.png" alt="Festival Itinerante de Leitura">
				<img src="../../dist/img/florempe.png" ></div>
				
			</div>
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12 video2">
					<iframe style="min-width: 90%;" height="240" src="https://www.youtube.com/embed/fYnSb6TXGko" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</div>
	<br>		
	<div class="row subida">
		<div class="col-md-7">
			<img src="../../dist/img/equipe.png" alt="Equipe" class="img-fluid">
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12">
					<div class="depoimento2">
						<p class="amaticregular">"Foi maravilhoso participar do FIL, encontrar pessoas e vivenciar histórias pelos caminhos do cerrado. Os brilhos nos olhos das crianças, dos pais e das pessoas idosas que se rejuvenesciam em cada narrativa, ficarão marcados para sempre em minha memória. Sou grato a todos por esse verdadeiro e inesquecível aprendizado humano."</p>
						<span class="amaticregular">Silvio Costta, escritor e músico</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<b><span class="poppinsextra f1">Coordenação Geral e Curadoria: </b><span class="poppinsextra f1">Alessandra Roscoe</span></span><br>
			<b><span class="poppinsextra f1">Produção Executiva: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Direção Artística e Musical: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Engenheiro de Som: </b><span class="poppinsextra f1">Pedro Luna</span></span><br>
			<b><span class="poppinsextra f1">Assistência de Produção: </b><span class="poppinsextra f1">Tiana Oliveira</span></span><br>
			<b><span class="poppinsextra f1">Fotos: </b><span class="poppinsextra f1">Adriana Franzin</span></span><br>
			<b><span class="poppinsextra f1">Filmagens: </b><span class="poppinsextra f1">Ronaldo Rosa e Rogério Verçoza</span></span><br>
			<b><span class="poppinsextra f1">Design e Criação Gráfica: </b><span class="poppinsextra f1">Daniela Gonçalves</span></span><br>
			<b><span class="poppinsextra f1">Design das Pipas Poéticas: </b><span class="poppinsextra f1">Natália Calamari</span></span><br>
			<b><span class="poppinsextra f1">Criação da Logomarca: </b><span class="poppinsextra f1">Aluízio Weber Filho</span></span><br><span class="poppinsextra f1">Assessoria de Imprensa: <span class="poppinsextra f1">Brlz Comunicação</span></span><br>
			<b><span class="poppinsextra f1">Apoiadores: </b><span class="poppinsextra f1">Hplus Hotelaria, La Boulangerie, Cantina Don Romano, Rede Globo, SESC</span></span><br>
			<b><span class="poppinsextra f1">Patrocínio: </b><span class="poppinsextra f1">Fundo de Apoio à Cultura do Distrito Federal - FAC - Secretaria de Cultura - Governo do Distrito Federal.</span></span>
		</div>
		<div class="col-md-1"><img src="../../dist/img/florempe.png" alt="Desenho de uma Flor" class="img-fluid"></div>
		<div class="col-md-5">
			<div class="depoimento3">
				<p class="amaticregular">"O FIL foi uma experiência profundamente transformadora. Cada dia, cada rosto, cada momento que vivi no festival ficaram para sempre guardadas em mim.Poucas vezes na vida senti tanto o impacto e o poder que a leitura de um livro pode ter sobre uma pessoa. Abrindo e fechando em lágrimas, risos, dores e reflexões. Permitindo a troca de experiências, caminhos, sabedoria e aprendizados da vida e do cotidiano. Cruzando-me com pessoas que no inicio eram só desconhecidos e que no final, acabaram sendo grandes amigos."</p>
				<span class="amaticregular">Anabella López, AUTORA E ILUSTRADORA</span>
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
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-2">
					<img src="../../dist/img/flor36.png" class="float-left" style="position: absolute;">
				</div>
				<div class="col-md-10">:
					<div class="depoimento4">
						<p class="amaticregular">"O Festival Itinerante de Leitura convida leitores de todas as idades para uma melhor leitura do mundo. Faz isso mesclando as artes. Reunindo Literatura, Música e Artes Plásticas, amplifica os olhares, a memória, os afetos. Imprime momentos inesquecíveis em todos nós. Torna o mundo mais bonito e solidário aos nossos olhos".</p>
						<span class="amaticregular">Tino Freitas - escritor, mediador de leituras e músico</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<p class="" style="font-size: 23px; text-align: right; margin-top: 30px;">
				<span class="poppinsextra">Anabella Lopes</span><span class="poppinsextra">(Argentina), </span>
				<span class="poppinsextra">Dilan Camargo</span><span class="poppinsextra">(RS), </span>
				<span class="poppinsextra">Silvio Costta</span><span class="poppinsextra">(SP), </span>
				<span class="poppinsextra">Stella Maris Rezende</span><span class="poppinsextra">(MG). </span><br>
				<b><span class="poppinsextra">Participações Especiais: </b></span>
				<span class="poppinsextra">Adriana Nunes</span><span class="poppinsextra">(DF), </span><br>
				<span class="poppinsextra">Adriano Siri</span><span class="poppinsextra">(DF),</span>
				<span class="poppinsextra">Italo Cajueiro</span><span class="poppinsextra">(DF),</span><br>
				<span class="poppinsextra">Joao Bosco Bezerra Bonfim</span><span class="poppinsextra">(DF),</span><br>
				<span class="poppinsextra">Natalia Calamari</span><span class="poppinsextra">(SP), </span>
				<span class="poppinsextra">Pedro Paulo Soares</span><span class="poppinsextra">(DF),</span>
				<span class="poppinsextra">Rodrigo Mafra</span><span class="poppinsextra">(DF),</span><br>
				<span class="poppinsextra">Ramont Willy</span><span class="poppinsextra">(DF) </span>
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
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">22.07.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Formação: Leitura para idosos</span><br>O processo de letramento afetivo na alfabetização de adultos<br><br>Atividade destinada aos professores, monitores e funcionários da alfabetização de adultos da Coordenação Regional de Ensino do Paranoá<br>Centro de Cultura e Desenvolvimento do Paranoá</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">27.07.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Ler e brincar de ler na primeira infância</span><br>Atividade destinada a profissionais da Educação Infantil da Regional de Ensino de Taguatinga<br>Centro de Educação Infantil 04 de Taguatinga</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/flor35.png" alt="Desenho de uma flor" class="img-fluid" style="margin: 15% 0 0 30%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">27.07.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Formação: Leitura para bebês</span><br>O processo de Letramento Afetivo na Primeira Infância<br>Atividade destinada aos professores, monitores e funcionários da Educação Infantil de Brazlândia<br>Sede da Regional de Ensino de Brazlândia</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">14.09.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Formação: Leitura para idosos</span><br>Atividade destinada aos idosos e à comunidade<br>Caixinha de guardar o tempo<br>- Leitura e memória<br>Contando ninguém acredita<br>- Contos, cantos e causos<br>Alessandra Roscoe, participação especial Orlando Neto (violão)<br>Associação de Idosos Renascer dos Pioneiros da Vila Planalto</span>
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
      					<span class="marmalade datac">20.09.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura partilhada com Alessandra Roscoe</span><br>
      					Show Contos, Cantos e Encantos<br>Hospital da Criança José de Alencar (Internação - Vão Central)</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">02.10.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Show Quem conta um conto aumenta um ponto</span><br>
      						Roda de leituras, histórias e cantigas<br>Alessandra Roscoe, Dilan Camargo e Stella Maris Rezende<br><br>CEAL Guará II</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">07.10.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Bebês e crianças com necessidades especiais da educação precoce</span>
      						<br>CAIC Unesco São Sebastião</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/flor35.png" alt="Desenho de uma flor" class="img-fluid" style="margin: 15% 0 0 30%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">28.10.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura  Afetiva com crianças de 0 a 5 anos de idade</span><br>
						CEPI Aroeira Brazlândia</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">29.10.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura sensorial com bebês e crianças especiais</span><br>
      						Centro de Ensino Especial 02 - Ceilândia<br>15h às 17h</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">30.10.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Costurando lembranças a partir dos livros idosos e comunidade da Vila Planalto</span><br>Associação dos Pioneiros da Vila Planalto</span>
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
      					<span class="marmalade datac">01.11.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Roda de Histórias e Cantigas, performance de ilustração, leituras e brincadeiras literárias</span><br>Show Tudo o que cabe num livro<br>Alessandra Roscoe e convidados do Distrito Federal<br><br>Teatro da Escola Parque 308/508 Sul</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">01.12.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Roda de histórias e cantigas, performance de ilustração, leituras e brincadeiras literárias</span><br>Show Tudo o que cabe num livro<br>Alessandra Roscoe e convidados do Distrito Federal<br><br><br>Teatro da Escola Parque 308/508 Sul</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/flor35.png" alt="Desneho de uma for" class="img-fluid" style="margin: 15% 0 0 30%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">04.12.2016</span><br>
      					<span class="poppinsextra textoc"><span class="b5a">Leitura partilhada com idosos e comunidade</span><br><br>
      					Feira do produtor do Jardim Botânico</span>
      				</div>
      			</div>
      			<div class="row">
      				<!--<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">27.09.2014</span><br>
      					<span class="poppinsextra textoc">Leitura pública com idosos<br><br>
      						Associação de Idosos do Varjão<br><br>10h30 às 12h30</span>
      				</div>-->
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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img src="../../dist/img/noticiainv.png" alt="Notícias" class="float-right img-fluid" >
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<a target="__blank" href="https://www.youtube.com/watch?v=XVeQaQZ_Fe0">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">SBT: Revoada</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-4">
			<a target="__blank" href="https://youtu.be/NOmNlxkyly4">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">SBT: Hospital</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-4">
			<a target="__blank" href="http://g1.globo.com/distrito-federal/videos/t/todos-os-videos/v/projeto-de-leitura-alem-de-aumentar-o-conhecimento-diverte-as-criancas/5311098/">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">TV GLOBO</p>
	        </div>
	      </a>
		</div>
    </div>
    <br><br>
    <img src="../../dist/img/galeria.png" alt="Galeria" class="img-fluid float-left">
    <img src="../../dist/img/flor37.png" alt="Desenho de uma flor" class="img-fluid borboleta34">

	</div>

	<br><br><br>

	<div class="container-fluid">

	<div class="owl-carousel">
	  <div><a class="example-image-link" href="../../dist/img/fil3/1.png" data-lightbox="example-set"><img src="../../dist/img/fil3/1.png" alt="Crianças do lado do museu Nacional"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/2.png" data-lightbox="example-set"><img src="../../dist/img/fil3/2.png" alt="Menina correndo brincando"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/3.png" data-lightbox="example-set"><img src="../../dist/img/fil3/3.png" alt="Crianças sentadas no chão"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/4.png" data-lightbox="example-set"><img src="../../dist/img/fil3/4.png" alt="Foto de um quadro escrito UniDuniLer, Terceiro festival itinerante de leitura"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/5.png" data-lightbox="example-set"><img src="../../dist/img/fil3/5.png" alt="Foto de pessoas em cima do palco no fim da apresentação"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/6.png" data-lightbox="example-set"><img src="../../dist/img/fil3/6.png" alt="Foto de uma aprensentação onde uma crinaça está falando e uma mulher tocando violão, ao fundo pessoas sentadas"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/7.png" data-lightbox="example-set"><img src="../../dist/img/fil3/7.png" alt="Mulher, em cima do palco, mostrando um livro para crianças que estão sentadas no chão olhando para ela"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/8.png" data-lightbox="example-set"><img src="../../dist/img/fil3/8.png" alt="Crianças sentadas no chão e um bebê ao centro da imagem"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/9.png" data-lightbox="example-set"><img src="../../dist/img/fil3/9.png" alt="Mulher em cima do palco contando história para crianças"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/10.png" data-lightbox="example-set"><img src="../../dist/img/fil3/10.png" alt="Uma roda de leitura onde uma mulher está sentada no chão contando histórias"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/11.png" data-lightbox="example-set"><img src="../../dist/img/fil3/11.png" alt="Momento de discontração onde existe uma mulher palestrando e adultos assistindo, todos alegres"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/12.png" data-lightbox="example-set"><img src="../../dist/img/fil3/12.png" alt="Diversas mulheres adultas olhando para a câmera, sorrindo, e com um livro na mão"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/13.png" data-lightbox="example-set"><img src="../../dist/img/fil3/13.png" alt="Mulher em pé, numa sala de aula, contando histórias para outras mulheres"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/14.png" data-lightbox="example-set"><img src="../../dist/img/fil3/14.png" alt="Mulher mostrando um livro para a câmera, nele está escrito: 'O Vampiro Argemiro"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/15.png" data-lightbox="example-set"><img src="../../dist/img/fil3/15.png" alt="Um homem e uma mulher tocando violão"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/16.png" data-lightbox="example-set"><img src="../../dist/img/fil3/16.png" alt="Duas rodas de pessoas, uma com mulheres mais velhas e outras com crianças"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/17.png" data-lightbox="example-set"><img src="../../dist/img/fil3/17.png" alt="Uma réplica de uma minhoca, O minhoco apaixonado, feito de pano"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/18.png" data-lightbox="example-set"><img src="../../dist/img/fil3/18.png" alt="Menina se escondendo atrás de um leque"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/19.png" data-lightbox="example-set"><img src="../../dist/img/fil3/19.png" alt="Mulher contando histórias para outras mulheres"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil3/20.png" data-lightbox="example-set"><img src="../../dist/img/fil3/20.png" alt="Apresentadora segurando o micrfone para uma idosa falar, ambos rindo"class="example-image"></a></div>
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
