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

				    //require_once('../usuario/fils/to_romano.php');
				         

				    $objDb = new Db();
				    $link = $objDb->conecta_mysql();    
				        
				    $sql = " SELECT * FROM fills where id != '0'";
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

					
    
                    <a class="dropdown-item"href="../festivais/festival-v/">V FESTIVAL</a>

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
	  </ul>
	</div>
	</div>
</nav>

<!-- Abaixo da navbar -->

<br><br>

<!-- Inicio do Carrossel 1 -->
<div style="margin-top: 50px;">
<div id="carouselExampleIndicators" class="carousel sppa cor3 slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" style="background-color: rgb(209,228,231);">
  	<!--1 Slide-->
    <div class="carousel-item active">
    	<div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <p><br></p>
                    <img src="../dist/img/Slide1-Carro(Meio).png" style="max-width:100%;" alt="First slide"style="width: 622px; height: 311px; object-fit: cover;"><br>
                </div>
                <div class="col-md-2"style="background-color: rgb(209,228,231);">
                </div>
            </div>
        </div>
    </div>
    <!--2 Slide-->
    <div class="carousel-item">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="../dist/img/slide-texto1(esquerda).png" style="max-width:100%;" style="width: 622px; height: 311px; object-fit: cover;" >
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                	<div class="row"><img src="../dist/img/slide-texto1(meio).png"style="max-width:100%; max-height: 100%"></div>
                    <div class="row"><div class="texto79">
                        <p class="poppinsextra record" style="text-align: center;">
                            Ler é descobrir <span class="marmalade mm2">novos mundos ,</span>explorar territórios desconhecidos e ressignificar a própria<br>
                            história. Um livro aberto é fonte infinita de prazer,magia e encantamento.<br>
                            O fascínio pelas letras está presente na vida da jornalista e escritora Alessandra Roscoe desde a<br> 
                            infância. Grávida da primeira filha, Alessandra encontrou na leitura, uma conexão única com o<br>
                            bebê ainda no ventre: a leitura partilhada em voz alta!<br>
                            Foi a semente que fez brotar o <span class="marmalade mm2">Uniduniler Todas as Letras.</span>Em 1998, criou oficinas de leitura<br>
                            com grupos de grávidas. Os bebês nasceram e surgiram também os encontros de leituras<br> 
                            sensoriais e o Uniduniler, um Clube de bebês leitores: pais e filhos,colos e livros,histórias e afetos<br>
                            divididos toda semana com famílias numa creche em Brasília.<br><br><br><br><br>
                        </p>
                    </div></div>
                </div>
                <div class="col-md-2">
                    <img src="../dist/img/slide-texto1(direita).png" style="max-width:100%;" style="width: 622px; height: 311px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!--3 Slide-->
    <div class="carousel-item">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                	<div class="row"><img src="../dist/img/slide-texto2(topo).png"style="max-width:100%;" style="width: 622px; height: 311px; object-fit: cover;" ></div>
                    <div class="row" class="texto79">
                        <p class="poppinsextra"  style="text-align: center;">
                            O Uniduniler Todas as Letras, além do foco na primeira infância, atua com  <span class="marmalade mm2">diferentes públicos</span> e das mais<br>diversas faixas etárias.<br><br> 
 
							Em 2007, no Hospital Universitário de Brasília (HUB), teve início o projeto <span class="marmalade mm2">"Caixinha de guardar o tempo"</span><br> 
							que buscou, a partir da leitura, com um grupo de idosos em tratamento de Alzheimer, costurar memórias e resgatar<br>lembranças.<br><br> 
 
							Hoje, realiza também  <span class="marmalade mm2">leituras afetivas</span> com crianças hospitalizadas, pessoas com necessidades especiais<br> ou em situação de vulnerabilidade social e espalha, por onde passa, o prazer de ler.
                        </p>
                    </div>
                    <div class="row"><img src="../dist/img/slide-texto2(fundo).png"style="max-width:100%;" style="width: 622px; height: 311px; object-fit: cover;" ></div>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
    </div>
    <!--4 Slide-->
    <div class="carousel-item">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                	<div class="row">
                    <div class="texto79">
                        <p class="poppinsextra" style="text-align: center;">
                            <br>
                            Além dos grupos de leitura, o Uniduniler realiza outras ações lúdicas com diferentes iniciativas, como:<br><span class="marmalade mm2">“A Revoada Poética”,</span>  que integra leitura e brincadeira a partir da confecção de pipas poéticas ilustradas, e o<br><span class="marmalade mm2">“Experimente a Palavra”</span>, leituras sensoriais com bebês explorando os cinco sentidos.<br><br>
							Em 2013, buscando novos desafios, o Uniduniler realizou o <span class="marmalade mm2">I Festival Intinerante de Leitura</span>, que<br> contou com a presença de escritores, músicos, contadores de história, ilustradores, mediadores de leitura, além de<br> profissionais especializados na primeira infância, para a realização de vários eventos, como rodas de leitura,<br> oficinas, leituras partilhadas em creches, asilos, hospitais, e abrigos, sempre espalhando livros e leituras em locais<br> pouco assistidos.<br><br> 
							A iniciativa teve grande repercussão e foi muito bem recebida pelo público e pela mídia.<br><br><br>
						</p>
                    </div></div>
                    <div class="row"><img src="../dist/img/slide-texto3(fundo).png" style="max-width:100%;" style="width: 622px; height: 311px; object-fit: cover;"></div>
                </div>
                 <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
      
    <!--5 Slide-->
    <div class="carousel-item">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                	<div class="row">
                    <div class="texto79">
                        <h4><p class="poppinsextra" style="text-align: center;">
                            <br><br><br>
                           Agora, o Festival Intinerante de Leitura do Uniduniler  se prepara para a quinta edição, contemplado mais uma vez<br><br><br> pelo FAC  - <span class="marmalade mm2">Fundo de Apoio à Cultura do Distrito Federal (FAC-DF)</span>.<br><br><br>
						</p></h4>
                    </div></div>
                    <div class="row"><img src="../dist/img/slide-texto4(fundo).png" style="max-width:100%;" style="width: 622px; height: 311px; object-fit: cover;"></div>
                </div>
                 <div class="col-md-2">
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
</div>
<!-- Final Carrossel 1 -->

<!--Propaganda do blog com o link-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="../atualidades/" target="__blank">
            <button type="button" class="botaoblog btn btn-outline-secondary idBotaoVem">Vem visitar o blog!</button>
            </a>
        </div>
    </div>
</div>
<div class="container"> 
    <div class="row"><img src="../dist/img/atividades-projeto.png" class="img-fluid"></div>            
    <div class="row">
        <div class="col-md-12">
            <span style="font-size:15px;">
                <p class="textop">
                    Ao longo dos anos, o Uniduniler Todas as Letras incorporou ações desenvolvidas por Alessandra Roscoe em sua carreira de escritora e mediadora de leituras. Conheça aqui cada uma das iniciativas que atualmente integram o Festival Itinerante de Leitura.
                </p>
            </span>
        </div>
    </div>
    <div  class="atleft">
        <div class="row">
            <div class="col-sm-4">
                <a hrer="../atividades/#aletramento"><img src="../dist/img/Aletramento.png" class="img-fluid"></a>
            </div>
            <div class="col-sm-4">
                <a href="../atividades/#experimente"><img src="../dist/img/experimente.png" class="img-fluid"></a>
            </div>
            <div class="col-sm-4">
                <a href="../atividades/#leitura"><img src="../dist/img/clubedeleitura.png" class="img-fluid"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="../atividades/#caixinha"><img src="../dist/img/caixinha.png" class="img-fluid"></a>
            </div>
            <div class="col-sm-4">
                <a href="../atividades/#revoada"><img src="../dist/img/revoada.png" class="img-fluid"></a>
            </div>
            <div class="col-sm-4">
                <a href="../atividades/#concerto"><img src="../dist/img/concerto.png" class="img-fluid"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="../atividades/#jovem"><img src="../dist/img/novasatividades/1.jpg" class="img-fluid"></a>
            </div>
            <div class="col-sm-4">
                <a href="../atividades/#liberdade"><img src="../dist/img/novasatividades/2.jpg" class="img-fluid"></a>
            </div>
            <div class="col-sm-4">
                <a href="../atividades/#terapia"><img src="../dist/img/novasatividades/terapia.png" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>
<div class="container">             
    <div class="row">
    <img src="../dist/img/o-festival.png" width="255" height="75" style="margin-left: 840px; margin-top: 10px"> 
    </div>
</div>

<!-- Inicio do Carrossel 2 -->
<div style="margin-top: 30px;">
    <div id="carousel2" class="carousel sppa cor3 slide" data-ride="carousel" style="background-color: rgb(84,101,103);">
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
                            <div class="row"><img src="../dist/img/festival1-escuro.png" style="max-width:100%; object-fit: cover;"></div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="texto79">
                                <p class="poppinsextra record" style="text-align: center;" ><i style="color: white" ><br> Integrar diferentes públicos, juntar leitura e diversão, escritores e desenhistas com seus leitores e,<br> semear literatura era um sonho antigo da escritora Alessandra Roscoe. Desse desejo, surgiu, em<br> 2013, o Festival Itinerante de Leitura -  Uniduniler Todas as Letras.<br><br></i></p>
                            </div>
                            </div>
                        <div class="col-md-2"style="background-color: rgb(84,101,103);">
                            
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
                                <div class="texto79">f#
                                    <h5 class="poppinsextra record" style="color: white"><br> O Festival é</h5> 
                                </div>
                            </div>
                            <div class="row"><img src="../dist/img/festival2-escuro.png" style="max-width:100%; object-fit: cover;"></div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="texto79">
                                <p class="poppinsextra record" style="text-align: center;" ><i style="color: white" ><br> Para levar literatura de forma lúdica e divertida a lugares onde ela nem sempre chega, o Festival<br> Itinerante de Leitura e sua caravana de convidados especiais realiza piqueniques literários, shows<br> de histórias, cantigas e revoadas poéticas, além de muitas leituras!<br><br><br></i></p>
                            </div>
                            </div>
                        <div class="col-md-2"style="background-color: rgb(84,101,103);">
                            
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
                            <div class="row"><img src="../dist/img/festival3-escuro.png" style="max-width:100%; object-fit: cover;"></div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="texto79">
                                <p class="poppinsextra record" style="text-align: center;" ><i style="color: white" ><br> Em todas as edições do Festival, a caravana poética de escritores e ilustradores percorre creches,<br> escolas, asilos, hospitais e abrigos. As ações que levam livros e leituras afetivas a bebês, idosos,<br> pessoas hospitalizadas, cegos, autistas, mulheres vítimas de violência e mesmo àqueles que não<br> sabem ler, mas se encantam com uma voz leitora, já beneficiaram mais de 6 mil pessoas. <br><br></i></p>
                            </div>
                            </div>
                        <div class="col-md-2"style="background-color: rgb(84,101,103);">
                            
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
</div>

<!-- Final do Carrossel 2 -->

<div class="container">				
	<div class="row">
	<img src="../dist/img/fest-int.png" class="img-fluid"style="margin-left: 70px;"> 
	</div>
</div>

<div class="container">

	<!--<div class="row">
		<div class="col-sm-3">

			<div class="containerIMG">
			  <img src="../dist/img/projimage1.png" alt="Avatar" class="imageIMG">
			  <div class="overlayIMG">
			    <div class="textIMG">IV FESTIVAL</div>
			    <div class="textIMG-">________________</div>
			    <div class="textIMGANO">2017</div>
			  </div>
			</div>


		</div>
		<div class="col-sm-3">


			<div class="containerIMG">
			  <img src="../dist/img/projimage2.png" alt="Avatar" class="imageIMG">
			  <div class="overlayIMG">
			    <div class="textIMG">III FESTIVAL</div>
			    <div class="textIMG-">________________</div>
			    <div class="textIMGANO">2016</div>
			  </div>
			</div>


		</div>
		<div class="col-sm-3">


			<div class="containerIMG">
			  <img src="../dist/img/projimage3.png" alt="Avatar" class="imageIMG">
			  <div class="overlayIMG">
			    <div class="textIMG">II FESTIVAL</div>
			    <div class="textIMG-">________________</div>
			    <div class="textIMGANO">2014</div>
			  </div>
			</div>


		</div>
		<div class="col-sm-3">


			<div class="containerIMG">
			  <img src="../dist/img/projimage4.png" alt="Avatar" class="imageIMG">
			  <div class="overlayIMG">
			    <div class="textIMG">I FESTIVAL</div>
			    <div class="textIMG-">________________</div>
			    <div class="textIMGANO">2013</div>
			  </div>
			</div>


		</div>
	</div>-->


	<div class="owl-carousel">
		<div>
			<p class="poppinsextra" style="text-align: center;">
                <br>
                    V Festival
                <br>
            </p>
	  		<div class="containerIMG">
				<a href="../festivais/festival-v/"><img src="../dist/img/kid.jpg" href="../festivais/festival-v/" alt="Avatar" class="imageIMG">
				<div class="overlayIMG">
				    <div class="textIMG">V FESTIVAL</div>
				    <div class="textIMG-">________________</div>
				    <div class="textIMGANO">2018</div>
				</div></a>
			</div>
  		</div>
  		<div>
 	  		<p class="poppinsextra" style="text-align: center;">
                <br>
                    IV Festival
                <br>
            </p>
	  		<div class="containerIMG">
				<a href="../festivais/festival-iv/"><img src="../dist/img/projimage1.png" href="../festivais/festival-iv/" alt="Avatar" class="imageIMG">
				<div class="overlayIMG">
				    <div class="textIMG">IV FESTIVAL</div>
				    <div class="textIMG-">________________</div>
				    <div class="textIMGANO">2017</div>
				</div></a>
			</div>
  		</div>
  		<div>
   			<p class="poppinsextra" style="text-align: center;">
               <br>
                    III Festival
                <br>
            </p>
		    <div class="containerIMG">
				<a href="../festivais/festival-iii/"><img src="../dist/img/projimage2.png" href="../festivais/festival-iii/" alt="Avatar" class="imageIMG">
				<div class="overlayIMG">
				    <div class="textIMG">III FESTIVAL</div>
				    <div class="textIMG-">________________</div>
				    <div class="textIMGANO">2016</div>
				</div></a>
			</div>
  		</div>
  		<div>
  			<p class="poppinsextra" style="text-align: center;">
                <br>
                    II Festival
                <br>
            </p>
		  	<div class="containerIMG">
				<a href="../festivais/festival-ii/"><img src="../dist/img/projimage3.png" href="../festivais/festival-ii/"alt="Avatar" class="imageIMG">
				<div class="overlayIMG">
				    <div class="textIMG">II FESTIVAL</div>
				    <div class="textIMG-">________________</div>
				    <div class="textIMGANO">2014</div>
				</div></a>
			</div>
  		</div>
  		<div>
  			<p class="poppinsextra" style="text-align: center;">
                <br>
                    I Festival
                <br>
            </p>
		  	<div class="containerIMG">
				<a href="../festivais/festival-i/"><img src="../dist/img/projimage4.png" alt="Avatar" class="imageIMG">
				<div class="overlayIMG">
				    <div class="textIMG">I FESTIVAL</div>
				    <div class="textIMG-">________________</div>
				    <div class="textIMGANO">2013</div>
				</div></a>
			</div>
  		</div>
        <div class="owl-nav">
            <div class="owl-prev">
                <span class="carousel-control-prev-icon" class="owl-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </div>
            <div class="owl-next">
                <span class="carousel-control-next-icon" class="owl-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span></div>
            </div>

  	</div>
</div>

<br><br>

<!--
<div class="teste221">
	<p class="teste221p">7</p>
</div>

<div class="direita222">
	<p class="teste222">UNIDUNILER<br><span class="teste222m">jovem</span></p>
	
</div>

<br>

<div class="teste221">
	<p class="teste221p">8</p>
</div>

<div class="direita222">
	<p class="teste222">ASAS DA<br><span class="teste222m">liberdade</span></p>
	
</div>

<div class="teste221">
	<p class="teste221p">9</p>
</div>

<div class="direita222">
	<p class="teste222">TERAPIA DA<br><span class="teste222m">palavra</span></p>
	
</div>-->






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
            $('.owl-carousel').find('.owl-nav').removeClass('disabled');
            $('.owl-carousel').on('changed.owl.carousel', function(event) {
                $(this).find('.owl-nav').removeClass('disabled');
            });
        </script>
	</body>


</html>