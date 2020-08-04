<!DOCTYPE HTML>
<html lang="pt-br">

<head>
		<!-- CAPA DO SITE -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>uniduniler | II FIL</title>
		<script src="../../dist/js/jquery-3.3.1.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../dist/js/parallax.js"></script>
		<link rel="stylesheet" href="../../dist/css/components/bootstrap.css">
		<link rel="stylesheet" href="../../dist/css/elements/navbar.css">
		<link rel="stylesheet" href="../../dist/css/elements/footer.css">
		<link rel="stylesheet" href="../../dist/css/fil2.css">
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
		            <a class="dropdown-item" href="../festival-iii/">III FESTIVAL</a>
		            <a class="dropdown-item" style="color: gray" href="../festival-ii/">II FESTIVAL</a>
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
				<div class="col-md-4" style="margin-bottom: -30%; margin-right: -5%"><span class="letrao">II</span></div>
				<div class="col-md-8" ><img style="padding:0 0 30% 3%; object-fit: contain; margin-top: 10%; margin-left: -5%" src="../../dist/img/festivalit.png" alt="Festival itinerante de leitura" >
				<img style="margin-top:-20%" src="../../dist/img/passarinho20.png" alt="Imagem de um passarinho desenhado" ></div>
				
			</div>
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12 video2"> 
					<iframe style="min-width: 90%; height:240px; padding-bottom: 10%" src="https://www.youtube.com/embed/itnbHurR3n4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>

		</div>
	</div>

	<div class="row subida">
		<div class="col-md-7">
			<img src="../../dist/img/equipe.png" alt="Equipe" class="img-fluid">
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-12">
					<div class="depoimento2">
						<p class="amaticregular">"O mundo precisa de grandes almas e isso tem que começar desde pequeno.  Voltaire dizia que: "Ler engrandece a alma" e o Festival Itinerante de Leitura ajuda as nossas crianças a  crescerem, provando aquilo que a vida tem de melhor: o gosto pela literatura."</p>
						<span class="amaticregular">Ítalo Cajueiro - Ilustror e animador</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<b><span class="poppinsextra f1">Assistência de Produção: </b><span class="poppinsextra f1">Claudia Weber, Luciana Roscoe</span></span><br>
			<b><span class="poppinsextra f1">Assistência de Produção: </b><span class="poppinsextra f1">Monyze Vizoto</span></span><br>
			<b><span class="poppinsextra f1">Coordenação e Curadoria: </b><span class="poppinsextra f1">Alessandra Roscoe</span></span><br>
			<b><span class="poppinsextra f1">Produção Executiva: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Diretor Artístico e Musical: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Engenheiro de Som: </b><span class="poppinsextra f1">Pedro Luna</span></span><br>
			<b><span class="poppinsextra f1">Monitoria: </b><span class="poppinsextra f1">Tiana Oliveira e Maíra Oliveira</span></span><br>
			<b><span class="poppinsextra f1">Fotos e filmagens: </b><span class="poppinsextra f1">Adriana Franzin</span></span><br>
			<b><span class="poppinsextra f1">Apoiadores: </b><span class="poppinsextra f1">Meliã Hotéis, La Boulangerie</span></span><br>
			<b><span class="poppinsextra f1">Apoiadores: </b><span class="poppinsextra f1">Cantina Don Romano, Rede Globo, SESC</span></span><br>
			<b><span class="poppinsextra f1">Design: </b><span class="poppinsextra f1">Daniela Rodrigues Gonçalves</span></span><br>
			<b><span class="poppinsextra f1">Design das Pipas Poéticas: </b><span class="poppinsextra f1">Natália Calamari</span></span><br>
			<b><span class="poppinsextra f1">Criação da Logomarca: </b><span class="poppinsextra f1">Aluízio Weber Filho</span></span><br><span class="poppinsextra f1">Assessoria de Imprensa: <span class="poppinsextra f1">Tato Comunicação</span></span><br>
			<b><span class="poppinsextra f1">Patrocínio: </b><span class="poppinsextra f1">Fundo de Apoio à Cultura do Distrito Federal - FAC - Secretaria de Cultura - Governo do Distrito Federal</span></span>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="depoimento3">
				<p class="amaticregular">"Participar do Uniduniler é vivenciar experiências  que só as  histórias, (e  a literatura), são capazes de nos proporcionar! Não tenho como esquecer a emoção de cada encontro com as crianças,  bebês  e  idosos, nos diferentes espaços  que visitamos,  em apenas três dias. Mas quero também registrar  um pequeno (e grande) exemplo de todo o cuidado dos organizadores em cada detalhe do evento: o de ter recebido,  meses depois da minha participação,  a minha  "pipa poética".  Embrulhada com zelo e emoldurada por varetas de bambu,  estava ali impresso, em papel delicado, uma ilustração e um poema, de um dos meus livros. Viajara quilômetros (de Brasilia a Belo Horizonte)  e continuava ali,   pronta para voar! Neste gesto, (também poético)  o Uniduniler reafirma o que todos nós, criadores do livro mais desejamos: sair  pelo mundo, com nossos desenhos e palavras!"</p>
				<span class="amaticregular">Marilda Castanha, Ilustradora</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-5">
			<!--<div class="depoimento4">
				<p class="amaticregular">"Livros rimam com festa, fragrância e itinerância. E um Festival Itinerante de Leitura, obviamente, só poderia mesmo deixar o mundo mais leve e significativo. Foi um prazer participar de algumas ações do FIL. Ficarei na torcida para que a Alessandra Roscoe siga fazendo festa para os livros, a leitura e os leitores."</p>
				<span class="amaticregular" style="margin-left: 75%;">Jonas Ribeiro, Escritor</span>
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
		<div class="col-md-12">
			<p class="" style="font-size: 26px; text-align: right; margin-top: 30px;">
				<span class="poppinsextra">Guga Murray</span><span class="poppinsextra">(RJ), </span>
				<span class="poppinsextra">Laurent Cardon</span><span class="poppinsextra">(França), </span>
				<span class="poppinsextra">Luciano Pontes</span><span class="poppinsextra">(PE), </span><br>
				<span class="poppinsextra">Marilda Castanha</span><span class="poppinsextra">(MG), </span>
				<span class="poppinsextra">Patricia de Arias</span><span class="poppinsextra">(Espanha)</span><br>
				<span class="poppinsextra">Participações Especiais: </span>
				<span class="poppinsextra">Ana Paula Bernardes</span><span class="poppinsextra">(DF), </span><br>
				<span class="poppinsextra">Carlos Laredo</span><span class="poppinsextra">(Espanha),</span>
				<span class="poppinsextra">Italo Cajueiro</span><span class="poppinsextra">(DF),</span>
				<span class="poppinsextra">Paepalanthus</span><span class="poppinsextra"></span><br>
				<span class="poppinsextra">Semprevivas</span><span class="poppinsextra">(DF) </span>
				<span class="poppinsextra"> e Tino Freitas</span><span class="poppinsextra">(DF)</span>
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
      					<span class="marmalade datac">06.08.2014</span><br>
      					<span class="poppinsextra textoc">Oficina de Preparação Espaço de Leitura<br><br>Lar Bezerra de Menezes - Sobradinho<br><br>14h30 às 17h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">12.08.2014</span><br>
      					<span class="poppinsextra textoc">Oficina de preparação Espaço Leitor e leitura sensorial com bebês e crianças especiais<br><br>Centro de Ensino Especial 02 - Ceilândia<br><br>15h às 18h</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/passarinho22.png" class="img-fluid" style="margin-top: 0%;">
      			<img src="../../dist/img/passarinho21.png" class="img-fluid" style="margin-top: 30%;">
      			<img src="../../dist/img/passarinho22.png" class="img-fluid" style="margin-top: 0%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">19.08.2014</span><br>
      					<span class="poppinsextra textoc">Oficina de Preparação: Formação de mediadores de bebês<br><br>Creche Oásis Bem Me Quer - São Sebastião<br><br>14h às 17h</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">28.08.2014</span><br>
      					<span class="poppinsextra textoc">Oficina de Leituras Partilhadas<br><br>Teatro da Escola Parque 308 Sul - Brasília<br><br>14h30 às 17h30</span>
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
      					<span class="marmalade datac">29.08.2014</span><br>
      					<span class="poppinsextra textoc">Leitura pública voltada para bebês<br><br>Biblioteca Setorial Érico Veríssimo - Brazlândia<br><br>10h30 às 12h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">30.08.2014</span><br>
      					<span class="poppinsextra textoc">Leitura pública com idosos<br><br>Lar Bezerra de Menezes - Sobradinho<br><br>10h30 às 12h30</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/passarinho22.png" class="img-fluid" style="margin-top: 0%;">
      			<img src="../../dist/img/passarinho21.png" class="img-fluid" style="margin-top: 30%;">
      			<img src="../../dist/img/passarinho22.png" class="img-fluid" style="margin-top: 0%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">09.09.2014</span><br>
      					<span class="poppinsextra textoc">Leitura sensorial com bebês e crianças especiais<br><br>
      						Centro de Ensino Especial 02 - Ceilândia<br><br>15h às 17h</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">12.09.2014</span><br>
      					<span class="poppinsextra textoc">Oficina Caixinha de Guardar o Tempo<br><br>
      						Associação de Idosos do Varjão<br><br>10h30 às 12h30</span>
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
      					<span class="marmalade datac">18.09.2014</span><br>
      					<span class="poppinsextra textoc">Oficina de formação de mediadores idosos<br><br>
      						Instituto Federal de Educação - São Sebastião<br><br>14h30 às 17h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">25.09.2013</span><br>
      					<span class="poppinsextra textoc">Roda de histórias e cantigas<br><br>
      						Instituto Batucar Batucadeiros - Recanto das Emas<br><br>
      						15h30 às 18h30</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/passarinho22.png" class="img-fluid" style="margin-top: 0%;">
      			<img src="../../dist/img/passarinho21.png" class="img-fluid" style="margin-top: 30%;">
      			<img src="../../dist/img/passarinho22.png" class="img-fluid" style="margin-top: 0%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">26.09.2014</span><br>
      					<span class="poppinsextra textoc">Leitura sensorial com bebês e crianças especiais<br><br>
      						Centro de Educação Infantil 04 - Taguatinga<br><br>10h30 às 12h30</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">27.09.2014</span><br>
      					<span class="poppinsextra textoc">Leitura pública com idosos<br><br>
      						Associação de Idosos do Varjão<br><br>10h30 às 12h30</span>
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
<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
			<img src="../../dist/img/noticiainv.png" alt="Notícias" class="float-right img-fluid" >
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<a target="__blank" href="https://www.youtube.com/watch?v=ei7cxmg8aBA&feature=youtu.be">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">DFTV 1</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-3">
			<a target="__blank" href="https://www.youtube.com/watch?v=Goyf_3VSFTs">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">DFTV 2</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-3">
			<a target="__blank" href="https://www.youtube.com/watch?v=ElEgEEi-9sU&feature=share">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">Record</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-3">
			<a target="__blank" href="./claudia.pdf">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">Revista Claudia</p>
	        </div>
	      </a>
		</div>

    </div>
    <br><br>
    <img src="../../dist/img/passarinho20.png" alt="Imagem de passarinho em desenho" class="img-fluid borboleta34">
    <img src="../../dist/img/galeria.png" alt="Galeria" class="img-fluid float-left">

</div>

	<br><br><br></br>

	<div class="container-fluid" >

	<div class="owl-carousel">
	  <div><a class="example-image-link" href="../../dist/img/fil2/1.png" data-lightbox="example-set"><img src="../../dist/img/fil2/1.png" alt="Foto de mulher beijando uma idosa cadeirante" class="example-image"></a> </div>

	  <div><a class="example-image-link" href="../../dist/img/fil2/2.png" data-lightbox="example-set"><img src="../../dist/img/fil2/2.png" alt="Dois Bebes brincando em um tapete laranjado" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil2/3.png" data-lightbox="example-set"><img src="../../dist/img/fil2/3.png" alt="Criança olhando para a câmera e tapando a boca com a mão" class="example-image"></a> </div>

	  <div><a class="example-image-link" href="../../dist/img/fil2/4.png" data-lightbox="example-set"><img src="../../dist/img/fil2/4.png" alt="Homem desnehando em um quadro de papel" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil2/5.png" data-lightbox="example-set"><img src="../../dist/img/fil2/5.png" alt="Bebe brincando em um tapete laranjado" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil2/6.png" data-lightbox="example-set"><img src="../../dist/img/fil2/6.png" alt="Duas mãos no meio da imagem se comprimentando"class="example-image"></a> </div>

	  <div><a class="example-image-link" href="../../dist/img/fil2/7.png" data-lightbox="example-set"><img src="../../dist/img/fil2/7.png" alt="Pessoas aplaudindo"class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil2/8.png" data-lightbox="example-set"><img src="../../dist/img/fil2/8.png" alt="Mulher com uma venda nos olhos e um bebe de olhos fechados um em frente ao outro"class="example-image"></a></div>
	</div>
	<div class="owl-controls">
        <div class="owl-nav">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
        </div>
    </div>

	</div>

	<br><br></br>
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
		<script src="../../dist/js/lightbox.min.js"></script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<script src="../../dist/owl/dist/owl.carousel.min.js"></script>
		<script>
			$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav: true,
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

			});
		</script>

	</body>


</html>
