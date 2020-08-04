<!DOCTYPE HTML>
<html lang="pt-br">

<head>
		<!-- CAPA DO SITE -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>uniduniler | ATUALIDADES</title>
		<script src="../dist/js/jquery-3.3.1.min.js"></script>
		<script src="../dist/js/bootstrap.min.js"></script>
		<script src="../dist/js/parallax.js"></script>
		<link rel="stylesheet" href="../dist/css/components/bootstrap.css">
		<link rel="stylesheet" href="../dist/css/elements/navbar.css">
		<link rel="stylesheet" href="../dist/css/elements/footer.css">
		<link rel="stylesheet" href="../dist/css/atualidades.css">
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
	      <a class="nav-link menubarra" href="../o-projeto/"><p class="nomep">O PROJETO</p></a>
	    </li>
	    <li class="nav-item dropdown">
	        <a class="nav-link menubarra" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">
	          <p class="nomep">A AUTORA</p>
	        </a>
	        <div class="dropdown-menu menudropdown" aria-labelledby="navbarDropdown">
	          <div class="novomenu">
	            <a class="dropdown-item" href="../sobre-a-autora/#biografia">Biografia</a>
                <a class="dropdown-item" href="../sobre-a-autora/#blog">Blog</a>
                <a class="dropdown-item" href="../sobre-a-autora/#livrosnav">Livros</a>
                <a class="dropdown-item" href="../sobre-a-autora/#noticias">Notícias</a>
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
	            <a class="dropdown-item" href="../festivais/festival-v/">V FESTIVAL</a>
	            <a class="dropdown-item" href="../festivais/festival-iv/">IV FESTIVAL</a>
	            <a class="dropdown-item" href="../festivais/festival-iii/">III FESTIVAL</a>
	            <a class="dropdown-item" href="../festivais/festival-ii/">II FESTIVAL</a>
	            <a class="dropdown-item" href="../festivais/festival-i/">I FESTIVAL</a>
	            </div>
	        </div>
	      </li>
	      <li class="nav-item">
	      	<a class="nav-link menubarra" href="../atualidades"><p class="nomep" style="color: #a7c9ce;">ATUALIDADES</p></a>
	    </li>
	    <li class="nav-item">
            <a class="nav-link menubarra" href="../email/"><p class="nomep">FALE CONOSCO</p></a>
        </li>
	  </ul>
	</div>
	</div>
</nav>
	<br><br><br><br><br>

	<div class="container">
			<img src="../dist/img/unesco.png" class="img-fluid unesco"></img>
	</div>

	<br>

	<div class="container" style="margin-top: 10px;">
		<div class="row">
			<div class="col-md-6">
				<div class="float-right">
				<iframe class="" style="min-width: 100%;" height="250" src="https://www.youtube.com/embed/bzQyniIOfIA?start=20"
				 frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<p class="poppins">O Uniduniler todas as letras ganhou reconhecimento internacional. Considerado pelo Centro Regional para el Fomento del Livbro en America Latina y el Caribe - CERLALC - Organismo ligado à Organização das Nações Unidas para a Educação, a Ciência e a Cultura - UNESCO como uma das melhores práticas de incentivo à Leitura para a Primeira Infâcia na América Latina e Caribe.</p>
				<a href="uniduniler.pdf" target="__blank">
		      	<section class="botao_haha btn-borboleta"
		      		style="min-height:40px;max-width: 180px;">
		      		<p align="center" class="texto_button">Detalhes</p>
		      	</section>
		      	</a>
			</div>
		</div>
		<div class="row" style="margin: 50px 0 40px 25px;">
			<div class="col-md-12">
				<img src="../dist/img/atualidades23.png" style="object-fit: contain;" class="img-fluid">
			</div>
		</div>
	</div>

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
                    
						    require_once('../sistema/usuario/db.class.php');
							require_once('../sistema/usuario/fils/to_romano.php');       
							//require_once('../usuario/fils/to_romano.php');
								                         
						    $objDb = new Db();
						    $link = $objDb->conecta_mysql();    
							
							$sql = " SELECT * FROM atualidades  order by id desc";
						    $resultado_id = mysqli_query($link, $sql);
						    if($resultado_id){
								                        
						    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
								$numero = $registro['ID'];
								$titulo = $registro['Título'];
								$post = $registro['Postagem'];
								$capa = $registro['Imagem'];

								if($numero != '0'){

								echo "<img src='../../$capa' class='img-fluid' style='margin-left: 0%;'>";
		      					echo "<img src='../dist/img/galhodireito.png' class='galhod'>";
		      					echo "<p>";
		      					echo "<span class='titulo23'>$titulo</span><br>";
		      					echo "<span class='data23'></span><br>";
		      					echo "<p class='conteudo23'>$post</p>";
		      					echo "</p>";
		      					echo "<a target='__blank' href='../atualidades/atualidades-bd/index.php?id=$numero'>";
							    echo "<div class='botao_haha btn-borboleta' style='min-height:40px;max-width: 180px;'>";
							    echo "<p align='center' class='texto_button'>Detalhes</p>";
							    echo "</div>";
						      	echo "</a>";
						      	echo "<br>";

									}

									else{
										
									}
								}
								                        
								}else{
								    echo 'Erro na consulta';
								}
						?>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-2">
      		</div>
      	</div>

      	

      	<div class="row">
      		<div class="col-md-2">
      		</div>
      		<div class="col-md-8">
      			<div class="row">
      				<div class="col-md-1">
      				</div>
      				<div class="col-md-11">
      					 <div class="col-md-12 video2 justify-center">
				          	<iframe style="min-width: 100%;" height="324" src="https://www.youtube.com/embed/-OI7PsFJmo0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				        </div>
      					
      					<p>
      					<span class="titulo23">Encerrada mais uma edição do Festival Itinerante de Leitura.</span><br>
      					<span class="data23"></span><br>
      					<p class="conteudo23">Foram 16 eventos com convidados, internacionais, nacionais e locais. A caravana poética do Uniduniler todas as letras passou por 8 cidades do Distrito Federal e espalhou arte, leituras e muito afeto por onde passou. As ações do Festival aconteceram em creches, hospitais, Casa Abrigo e lar de idosos. Veja no vídeo um pouco do que foi o V Festival</p>
      					</p>
      					<a target="__blank" href="http://unidunilertodasasletras.wordpress.com/">
					      	<div class="botao_haha btn-borboleta"
					      		style="min-height:40px;max-width: 180px;">
					      		<p align="center" class="texto_button">Detalhes</p>
					      	</div>
				      	</a>
				      	<br>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-2">
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-2">
      		</div>
      		<div class="col-md-8">
      			<div class="row">
      				<div class="col-md-1">
      				</div>
      				<div class="col-md-11">
      					<img src="../dist/img/postagens/asas.jpeg" class="img-fluid" style="margin-left: 0%;">
      					<img src="../dist/img/galhodireito.png" class="galhod">
      					<p>
      					<span class="titulo23">Asas da Liberdade</span><br>
      					<span class="data23"></span><br>
      					<p class="conteudo23">Tem novidade boa no Uniduniler todas as letras! Já a partir do segundo semestre de 2018 dois novos projetos passam a integrar as nossas atividades e ambos em caráter permanente e contínuo> Uniduniler Jovem - Clube de leitores voltado para jovens, uma parceria com o Calangos Leitores e Uniduniler Asas da Liberdade, que fará encontros de leituras mensais com mulheres em privação de liberdade, nas penitenciárias pelo país. O projeto piloto tem o apoio do grupo Mulheres do Brasil e acontecerá na unidade prisional da Colmeia, na cidade do Gama- DF que fica a 30 km de Brasília.</p>
      					</p>
      					<a target="__blank" href="http://unidunilertodasasletras.wordpress.com/">
					      	<div class="botao_haha btn-borboleta"
					      		style="min-height:40px;max-width: 180px;">
					      		<p align="center" class="texto_button">Detalhes</p>
					      	</div>
				      	</a>
				      	<br>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-2">
      		</div>
      	</div>

	</div>
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
                        <img class="img-responsive" src="../dist/img/insta.png">
                        </a>
                        <a target="__blank" href="https://www.facebook.com/Uni-duni-Ler-Todas-as-Letras-490238471064886/">
                        <img class="img-responsive" src="../dist/img/face.png">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2"><a href="../atualidades/" target="__blank">
                    <button type="button" class="botaoblog btn btn-outline-secondary idBotaoVem">Vem visitar o blog!  </button></a></div>
            </div>
        </div>
    </footer>


		<!-- fim do arquivo -->
		<script src="../dist/js/bootstrap.min.js"></script>

	</body>


</html>
