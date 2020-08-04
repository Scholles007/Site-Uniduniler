
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
                            <div class="row"><img src="../../dist/img/festival1-claro.png" style=" max-width:100%;"></div>
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
		<div class="col-md-7 letra">
			<span class="letrao">I</span>
			<img style="padding:0 0 30% 3%; object-fit: contain;" src="../../dist/img/festivalit.png" alt="Festival Itinerante de Leitura">
			<img src="../../dist/img/sbabb.png" class="b1 img-fluid" alt="Duas Borboletas">
		</div>
		<div class="col-md-5">
			<div class="depoimento2">
				<p class="amaticregular">" Tive a felicidade de participar do primeiro Festival Intinerante de Leitura. Momento de entusiasmo, prazer e alegria em volta do livro e dos inúmeros prazeres que a leitura pode proporcionar a unir pessoas com o objetivo de estimular o pensamento, conhecimento e lazer. Um projeto para bebês, crianças, jovens e adultos. Bom saber que outras edições vieram, que o fFstival continua e que, mesmo com a dificuldade em relação aos movimentos culturais, uma iniciativa como essa resiste. Viva!"</p>
				<span class="amaticregular">André Neves - escritor e ilustrador</span>
			</div>
			<div class="depoimento21">
				<p class="amaticregular">"Participar do Uniduniler ao lado de parceiros queridos como Alessandra Roscoe e André Neves foi um momento inesquecível. Pude lidar com vários tipos de atividades, desde o meu lado mais acadêmico – numa oficina para professores e contadores – até meu lado de comunicador, ao contar histórias para crianças, adultos e até mesmo idosos num Lar de idosos. Foi uma experiência marcante para mim, e uma das inspirações para a criação do meu livro "Cachinhos de Prata".</p>
				<span class="amaticregular">Léo Cunha, Escritor</span>
			</div>
		</div>
	</div>

	<img src="../../dist/img/equipe.png" alt="Equipe" class="img-fluid">

	<div class="row">
		<div class="col-md-5">
			<b><span class="poppinsextra f1">Coordenação e Curadoria: </b><span class="poppinsextra f1">Alessandra Roscoe</span></span><br>
			<b><span class="poppinsextra f1">Direção Artística e Musical: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Produção Executiva: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Equipe de Apoio: </b><span class="poppinsextra f1">Luciana Roscoe e Claudia Weber</span></span><br>
			<b><span class="poppinsextra f1">Monitoria: </b><span class="poppinsextra f1">Letícia Levenhagem</span></span><br>
			<b><span class="poppinsextra f1">Direção Artística e Musical: </b><span class="poppinsextra f1">Orlando Neto</span></span><br>
			<b><span class="poppinsextra f1">Engenheiro de Som: </b><span class="poppinsextra f1">Pedro Lima</span></span><br>
			<b><span class="poppinsextra f1">Fotos e filmagens: </b><span class="poppinsextra f1">Adriana Franzin</span></span><br>
			<b><span class="poppinsextra f1">Assessoria de imprensa: </b><span class="poppinsextra f1">Tato comunicacao</span></span><br>
			<b><span class="poppinsextra f1">Apoiadores: </b><span class="poppinsextra f1">Don Romano Cantina e Pizzaria, Meliã Brasil 21 Hotéis, Cia Teatral La Casa Incierta, La Boulangerie, Roedores de Livros.</span></span><br>
			<b><span class="poppinsextra f1">Patrocínio: </b><span class="poppinsextra f1">Fundo de Apoio à Cultura do Distrito Federal - FAC - Secretaria de Cultura - Governo do Distrito Federal</span></span>
		</div>
		<div class="col-md-2"><img src="../../dist/img/sb2.png" alt="Borboletas" class="b2 img-fluid"><img src="../../dist/img/b4.png" class="b3 img-fluid" alt="Uma borboleta">
		</div>
		<div class="col-md-5">
			<div class="depoimento3">
				<p class="amaticregular">“Ocupar e preencher os espaços e leitores com literatura e afeto, é a bandeira, ou melhor, a “pipa poética” que o FIL empina e espalha pelo céu, pelo ar e pela terra de Brasília. Que imensa alegria participar deste levante!”</p>
				<span class="amaticregular">Marília Pirillo, ilustradora e escritora</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-5">
			<div class="depoimento4">
				<p class="amaticregular">"Livros rimam com festa, fragrância e itinerância. E um Festival Itinerante de Leitura, obviamente, só poderia mesmo deixar o mundo mais leve e significativo. Foi um prazer participar de algumas ações do FIL. Ficarei na torcida para que a Alessandra Roscoe siga fazendo festa para os livros, a leitura e os leitores."</p>
				<span class="amaticregular">Jonas Ribeiro, Escritor</span>
			</div>
		</div>
		<div class="col-md-4">
			<img src="../../dist/img/b4.png" alt="Uma borboleta" class="img-fluid">
			<img src="../../dist/img/sb2.png" alt="Duas borboletas" class="img-fluid b5 float-right">
		</div>
		<div class="col-md-3">
			<img src="../../dist/img/convidados.png" alt="Convidados" class="img-fluid float-right" style="min-width: 100%">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<p class="" style="font-size: 26px; text-align: right; margin-top: 30px;">
				<span class="poppinsextra">Jonas Ribeiro</span><span class="poppinsextra">(SP), </span>
				<span class="poppinsextra">André Neves</span><span class="poppinsextra">(RS), </span>
				<span class="poppinsextra">Carlos Laredo</span><span class="poppinsextra">(Espanha), </span><br>
				<span class="poppinsextra">Clarice Cardell</span><span class="poppinsextra">(Espanha), </span>
				<span class="poppinsextra">Leo Cunha</span><span class="poppinsextra">(MG) e </span>
				<span class="poppinsextra">Marília Pirillo</span><span class="poppinsextra">(RJ), </span><br>
				<b><span class="poppinsextra">Participações Especiais: </b></span></span>
				<span class="poppinsextra">Ana Paula Bernardes</span><span class="poppinsextra">(DF), </span>
				<span class="poppinsextra">Tino Freitas</span><span class="poppinsextra">(DF)</span>
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
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div class="container">
      	<div class="row">
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">25.07.2013</span><br>
      					<span class="poppinsextra textoc">Oficina de Formação com professores e funcionários do Centro Social e Comunitário Tia Angelina (Varjão - DF)<br><br>8h00 às 12h00<br><br>
      						Alessandra Roscoe (DF), Carlos Laredo (Cia La Casa Incierta - Espanha) e Clarice Cardell ( Cia La Casa Incierta - Espanha)</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">21.08.2013</span><br>
      					<span class="poppinsextra textoc">Oficina: O fio do invisível construindo memórias e afetos Centro Social e Comunitário Tia Angelina ( Varjão - DF)<br><br>Leitura e jogos cênicos com bebês<br>8h30 às 12h30<br>Alessandra Roscoe(DF), Carlos Laredo (Espanha) e Clarice Cardell (Espanha)</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">25.07.2013</span><br>
      					<span class="poppinsextra textoc">Oficina de Formação com professores e funcionários do Centro Social e Comunitário Tia Angelina (Varjão - DF)<br><br>8h00 às 12h00<br><br>
      						Alessandra Roscoe (DF), Carlos Laredo (Cia La Casa Incierta - Espanha) e Clarice Cardell ( Cia La Casa Incierta - Espanha)</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">21.08.2013</span><br>
      					<span class="poppinsextra textoc">Oficina: O fio do invisível construindo memórias e afetos Centro Social e Comunitário Tia Angelina ( Varjão - DF)<br><br>Leitura e jogos cênicos com bebês<br>8h30 às 12h30<br>Alessandra Roscoe(DF), Carlos Laredo (Espanha) e Clarice Cardell (Espanha)</span>
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
      					<span class="marmalade datac">25.08.2013</span><br>
      					<span class="poppinsextra textoc">Leitura Pública com idosos<br>
      						10h - Taguaparque - Taguatinga (DF)<br>Com Alessandra Roscoe (DF), Jonas Ribeiro (SP), Marília Pirillo (RJ) e Tino Freitas (DF).</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">23.09.2013</span><br>
      					<span class="poppinsextra textoc">Revoada Poética<br>
      						10h - Entrada do Jardim Botânico de Brasília<br>( Brasília - DF)<br>
      						Com Alessandra Roscoe (DF)</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">24.09.2013</span><br>
      					<span class="poppinsextra textoc">Leitura Sensorial com bebês cegos - CEEDV (Brasília - DF)<br>10h às 12h<br>Oficina Caixinha de guardar o tempo - Instituto Federal de Educação (São Sebastião - DF)<br><br>19h30 às 22h30<br><br>Com alunos dos cursos de cuidadores de idosos e pedagogia<br>Com Alessandra Roscoe (DF).</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">27.09.2013</span><br>
      					<span class="poppinsextra textoc">Oficina: Muitas leituras Infinitas histórias - Auditório da Biblioteca Nacional de Brasília<br><br>15h às 18h<br><br>
      					Com Alessandra Roscoe (DF) e Leo Cunha (MG).</span>
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
      					<span class="marmalade datac">28.09.2013</span><br>
      					<span class="poppinsextra textoc">Leitura Pública com idosos<br><br>
      						10h - Taguaparque - Taguatinga (DF)<br><br>Com Alessandra Roscoe (DF), Jonas Ribeiro (SP), Marília Pirillo (RJ) e Tino Freitas (DF).</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">29.09.2013</span><br>
      					<span class="poppinsextra textoc">Leitura afetiva com bebês e crianças - Escola Classe 01 (Paranoá - DF)<br><br>10h00 às 12h00<br><br>Com Alessandra Roscoe (DF), André Neves (RS) e Leo Cunha (MG).</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
      		</div>
      		<div class="col-md-4">
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">25.11.2013</span><br>
      					<span class="poppinsextra textoc">Oficina Do Livro ao Palco - Escola Classe 08  (Guará - DF)<br>
						Apresentação Teatral: Deu Rato na Biblioteca<br><br>
						14h30 às 17h30<br><br>
						Com Alessandra Roscoe(DF), Maria Célia Madureira (DF) e Raquel Gonçalves (DF).</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">26.09.2013</span><br>
      					<span class="poppinsextra textoc">Chá literário de "desaniversário" do Dia dos Avós Inspirado em Alice no País das Maravilhas<BR>Casa de Chá do Jardim botânico de Brasília ( Brasília - DF) aberto a avós e netos<br><br>14h às 18h<br><br>Com Alessandra Roscoe (DF), </span>
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
      					<span class="marmalade datac">09.12.2013</span><br>
      					<span class="poppinsextra textoc">Show de Histórias e Cantigas - Teatro da Escola Parque 308 Sul (Brasília - DF)<br><br>14h00 às 17h00<br><br>Com Alessandra Roscoe (DF)</span>
      				</div>
      			</div>
      			<div class="row">
      				<div class="col-md-12 text-center centroz">
      					<span class="marmalade datac">27.02.2013</span><br>
      					<span class="poppinsextra textoc">Oficina: Leitura e memória com idosos Centro de Saúde 01 (Guará)<br><br>14h às 17h<br><br>Oficina Caixinha de Guardar o Tempo para profissionais da saúde que lidam com idosos.<br><br>Com Alessandra Roscoe (DF)</span>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-4">
      			<img src="../../dist/img/borboleta33.png" class="img-fluid" style="margin-top: 30%;">
      		</div>
      		<div class="col-md-4">

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
	    <div class="row">
		<div class="col-sm-4">
			<a target="__blank" href="http://www.ebc.com.br/infantil/para-pais/2013/09/poemas-ganham-o-ceu-de-brasilia-no-festival-itinerante-de-leitura">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">EBC</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-4">
			<a target="__blank" href="http://www.ebc.com.br/infantil/para-pais/2013/10/como-ler-para-bebes-cegos">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">EBC</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-4">
			<a target="__blank" href="https://www.youtube.com/watch?v=pGG1RVrFhbM">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">UnBTV</p>
	        </div>
	      </a>
		</div>
    </div>
	<div class="row">
		<div class="col-sm-3">
			<a target="__blank" href="./cb.jpg">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">Correio Braziliense</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-3">
			<a target="__blank" href="./veja.jpg">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">Veja Brasília</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-3">
			<a target="__blank" href="http://www.ebc.com.br/infantil/para-pais/2013/08/festival-itinerante-leva-literatura-para-bebes-no-df">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">EBC</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-3">
			<a target="__blank" href="https://www.youtube.com/watch?v=phsTAl3vILI&feature=youtu.be">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">TV Supren</p>
	        </div>
	      </a>
		</div>
    </div>
    <div class="row">
		<div class="col-sm-4">
			<a target="__blank" href="http://www.ebc.com.br/infantil/para-pais/galeria/audios/2013/08/alessandra-roscoe-no-programa-cotidiano">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">EBC</p>
	        </div>
	      </a>
		</div>
		<div class="col-sm-4">
			<a target="__blank" href="http://www.ebc.com.br/infantil/para-pais/2013/09/festival-leva-literatura-para-bebes-cegos-ou-com-pouca-visao">
	          <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">EBC</p>
	        </div>
	      </a>
		</div>

		<div class="col-sm-4">
			<a target="__blank" href="https://www.youtube.com/watch?v=UPU9_Hlu0Y0">
	        <div class="botao_haha btn-borboleta">
	          <p align="center" class="texto_button">YouTube</p>
	        </div>
	      </a>
		</div>
	</div>
    <br><br>
    <img src="../../dist/img/b4.png" alt="Uma borboleta" class="img-fluid borboleta34">
    <img src="../../dist/img/galeria.png" alt="Galeria" class="img-fluid float-left">
</div>

	<br><br><br>

	<div class="container-fluid">

	<div class="owl-carousel">

	  <!--O Script que usei foi o lightbox, utilizei sua classe de exemplo:
	  	https://lokeshdhakar.com/projects/lightbox2/#getting-started
	  -->

	  <div><a class="example-image-link" href="../../dist/img/fil1/1.png" data-lightbox="example-set"><img src="../../dist/img/fil1/1.png" class="example-image" alt="Crianças soltando balões" ></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/2.png" data-lightbox="example-set"><img src="../../dist/img/fil1/2.png" alt="Menina rindo" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/3.png" data-lightbox="example-set"><img src="../../dist/img/fil1/3.png" alt=" Crianças sentadas na grama, pintando folhas de papel" class="example-image"></a> </div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/4.png" data-lightbox="example-set"><img src="../../dist/img/fil1/4.png" alt="Homem fantasiado de coelho contando histórias" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/5.png" data-lightbox="example-set"><img src="../../dist/img/fil1/5.png" alt="Crianças sentadas no chão" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/6.png" data-lightbox="example-set"><img src="../../dist/img/fil1/6.png" alt="Várias crianças ouvindo histórias" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/7.png" data-lightbox="example-set"><img src="../../dist/img/fil1/7.png" alt="Criança brincando com catavento" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/8.png" data-lightbox="example-set"><img src="../../dist/img/fil1/8.png" alt="Mulher desenhando animais, para crianças" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/9.png" data-lightbox="example-set"><img src="../../dist/img/fil1/9.png" alt="Criança olhando para a câmera, com um livro aberto" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/10.png" data-lightbox="example-set"><img src="../../dist/img/fil1/10.png" alt="Mulher contando história para um idoso" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/11.png" data-lightbox="example-set"><img src="../../dist/img/fil1/11.png" alt="Idosos rindo" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/12.png" data-lightbox="example-set"><img src="../../dist/img/fil1/12.png" alt="Atores fantasiados de ratos gigante contando histórias" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/13.png" data-lightbox="example-set"><img src="../../dist/img/fil1/13.png" alt="Menina sentada no chão de grama printando uma flor" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/14.png" data-lightbox="example-set"><img src="../../dist/img/fil1/14.png" alt="Homem contando histórias para cirnaças em frente à biblioteca nacional" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/15.png" data-lightbox="example-set"><img src="../../dist/img/fil1/15.png" alt="Crianças sentadas no chão ouvindo histórias" class="example-image"></a></div>

	  <div><a class="example-image-link" href="../../dist/img/fil1/16.png" data-lightbox="example-set"><img src="../../dist/img/fil1/16.png" alt="Diversos balões voando para o céu" class="example-image"></a></div>
	</div>
	<div class="owl-controls">
        <div class="owl-nav">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
        </div>
    </div>

	</div>
</div>
	<br><br>

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
