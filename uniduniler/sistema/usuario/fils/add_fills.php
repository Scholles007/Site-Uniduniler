<?php

	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }
	require_once('db.class.php');
	//fills
	$design	= $_POST['tema'];
	//depoimentos

	$autor1 = $_POST['autor1'];
	$depoimento1 = $_POST['depoimento1'];

	$autor2 = $_POST['autor2'];
	$depoimento2 = $_POST['depoimento2'];

	$autor3 = $_POST['autor3'];
	$depoimento3 = $_POST['depoimento3'];

	$autor4 = $_POST['autor4'];
	$depoimento4 = $_POST['depoimento4'];

	//programação

	$data1 = $_POST['data1'];
	$titulo1 = $_POST['titulo1'];
	$sobre1 = $_POST['sobre1'];

	$data2 = $_POST['data2'];
	$titulo2 = $_POST['titulo2'];
	$sobre2 = $_POST['sobre2'];

	$data3 = $_POST['data3'];
	$titulo3 = $_POST['titulo3'];
	$sobre3 = $_POST['sobre3'];

	$data4 = $_POST['data4'];
	$titulo4 = $_POST['titulo4'];
	$sobre4 = $_POST['sobre4'];

	$data5 = $_POST['data5'];
	$titulo5 = $_POST['titulo5'];
	$sobre5 = $_POST['sobre5'];

	$data6 = $_POST['data6'];
	$titulo6 = $_POST['titulo6'];
	$sobre6 = $_POST['sobre6'];

	$data7 = $_POST['data7'];
	$titulo7 = $_POST['titulo7'];
	$sobre7 = $_POST['sobre7'];

	$data8 = $_POST['data8'];
	$titulo8 = $_POST['titulo8'];
	$sobre8 = $_POST['sobre8'];

	$data9 = $_POST['data9'];
	$titulo9 = $_POST['titulo9'];
	$sobre9 = $_POST['sobre9'];

	$data10 = $_POST['data10'];
	$titulo10 = $_POST['titulo10'];
	$sobre10 = $_POST['sobre10'];

	$data11 = $_POST['data11'];
	$titulo11 = $_POST['titulo11'];
	$sobre11 = $_POST['sobre11'];

	$data12 = $_POST['data12'];
	$titulo12 = $_POST['titulo12'];
	$sobre12 = $_POST['sobre12'];

	$data13 = $_POST['data13'];
	$titulo13 = $_POST['titulo13'];
	$sobre13 = $_POST['sobre13'];

	$data14 = $_POST['data14'];
	$titulo14 = $_POST['titulo14'];
	$sobre14 = $_POST['sobre14'];

	$data15 = $_POST['data15'];
	$titulo15 = $_POST['titulo15'];
	$sobre15 = $_POST['sobre15'];

	$data16 = $_POST['data16'];
	$titulo16 = $_POST['titulo16'];
	$sobre16 = $_POST['sobre16'];

	$data17 = $_POST['data17'];
	$titulo17 = $_POST['titulo17'];
	$sobre17 = $_POST['sobre17'];

	$data18 = $_POST['data18'];
	$titulo18 = $_POST['titulo18'];
	$sobre18 = $_POST['sobre18'];

	$data19 = $_POST['data19'];
	$titulo19 = $_POST['titulo19'];
	$sobre19 = $_POST['sobre19'];

	$data20 = $_POST['data20'];
	$titulo20 = $_POST['titulo20'];
	$sobre20 = $_POST['sobre20'];

	//noticias - Vai até o 6

	$noticia1 = $_POST['noticia1'];
	$link1 = $_POST['link1'];

	$noticia2 = $_POST['noticia2'];
	$link2 = $_POST['link2'];

	$noticia3 = $_POST['noticia3'];
	$link3 = $_POST['link3'];

	$noticia4 = $_POST['noticia4'];
	$link4 = $_POST['link4'];

	$noticia5 = $_POST['noticia5'];
	$link5 = $_POST['link5'];

	$noticia6 = $_POST['noticia6'];
	$link6 = $_POST['link6'];

	//convidados

	$convidado1 = $_POST['convidado1'];
	$estado1 = $_POST['estado1'];

	$convidado2 = $_POST['convidado2'];
	$estado2 = $_POST['estado2'];

	$convidado3 = $_POST['convidado3'];
	$estado3 = $_POST['estado3'];

	$convidado4 = $_POST['convidado4'];
	$estado4 = $_POST['estado4'];

	$convidado5 = $_POST['convidado5'];
	$estado5 = $_POST['estado5'];

	$convidado6 = $_POST['convidado6'];
	$estado6 = $_POST['estado6'];

	$convidado7 = $_POST['convidado7'];
	$estado7 = $_POST['estado7'];

	$convidado8 = $_POST['convidado8'];
	$estado8 = $_POST['estado8'];

	$convidado9 = $_POST['convidado9'];
	$estado9 = $_POST['estado9'];

	$convidado10 = $_POST['convidado10'];
	$estado10 = $_POST['estado10'];

	$convidado11 = $_POST['convidado11'];
	$estado11 = $_POST['estado11'];

	$convidado12 = $_POST['convidado12'];
	$estado12 = $_POST['estado12'];

	$convidado13 = $_POST['convidado13'];
	$estado13 = $_POST['estado13'];

	$convidado14 = $_POST['convidado14'];
	$estado14 = $_POST['estado14'];

	$convidado15 = $_POST['convidado15'];
	$estado15 = $_POST['estado15'];

	$convidado16 = $_POST['convidado16'];
	$estado16 = $_POST['estado16'];

	$convidado17 = $_POST['convidado17'];
	$estado17 = $_POST['estado17'];

	$convidado18 = $_POST['convidado18'];
	$estado18 = $_POST['estado18'];

	//colaboradores

	$clb1 = $_POST['clb1'];
	$cargo1 = $_POST['cargo1'];

	$clb2 = $_POST['clb2'];
	$cargo2 = $_POST['cargo2'];

	$clb3 = $_POST['clb3'];
	$cargo3 = $_POST['cargo3'];

	$clb4 = $_POST['clb4'];
	$cargo4 = $_POST['cargo4'];

	$clb5 = $_POST['clb5'];
	$cargo5 = $_POST['cargo5'];

	$clb6 = $_POST['clb6'];
	$cargo6 = $_POST['cargo6'];

	$clb7 = $_POST['clb7'];
	$cargo7 = $_POST['cargo7'];

	$clb8 = $_POST['clb8'];
	$cargo8 = $_POST['cargo8'];

	$clb9 = $_POST['clb9'];
	$cargo9 = $_POST['cargo9'];

	$clb10 = $_POST['clb10'];
	$cargo10 = $_POST['cargo10'];

	$clb11 = $_POST['clb11'];
	$cargo11 = $_POST['cargo11'];

	$clb12 = $_POST['clb12'];
	$cargo12 = $_POST['cargo12'];

	$clb13 = $_POST['clb13'];
	$cargo13 = $_POST['cargo13'];

	$clb14 = $_POST['clb14'];
	$cargo14 = $_POST['cargo14'];

	$clb15 = $_POST['clb15'];
	$cargo15 = $_POST['cargo15'];

	$clb16 = $_POST['clb16'];
	$cargo16 = $_POST['cargo16'];

	//convertendo datas para o padrão brasileiro
	$data1 = explode(" ", $data1);
  	list($date) = $data1;
  	$data1 = array_reverse(explode("/", $date));
  	$data1 = implode("-", $data1);
  	$data1 = $data1 . " ";

  	$data2 = explode(" ", $data2);
  	list($date) = $data2;
  	$data2 = array_reverse(explode("/", $date));
	$data2 = implode("-", $data2);
	$data2 = $data2 . " ";

	$data3 = explode(" ", $data3);
  	list($date) = $data3;
  	$data3 = array_reverse(explode("/", $date));
  	$data3 = implode("-", $data3);
	$data3 = $data3 . " ";

	$data4 = explode(" ", $data4);
  	list($date) = $data4;
  	$data4 = array_reverse(explode("/", $date));
  	$data4 = implode("-", $data4);
	$data4 = $data4 . " ";

	$data5 = explode(" ", $data5);
  	list($date) = $data5;
  	$data5 = array_reverse(explode("/", $date));
  	$data5 = implode("-", $data5);
  	$data5 = $data5 . " ";

	$data6 = explode(" ", $data6);
  	list($date) = $data6;
  	$data6 = array_reverse(explode("/", $date));
  	$data6 = implode("-", $data6);
	$data6 = $data6 . " ";

	$data7 = explode(" ", $data7);
  	list($date) = $data7;
  	$data7 = array_reverse(explode("/", $date));
  	$data7 = implode("-", $data7);
	$data7 = $data7 . " ";

	$data8 = explode(" ", $data8);
  	list($date) = $data8;
  	$data8 = array_reverse(explode("/", $date));
  	$data8 = implode("-", $data8);
	$data8 = $data8 . " ";

	$data9 = explode(" ", $data9);
  	list($date) = $data9;
  	$data9 = array_reverse(explode("/", $date));
  	$data9 = implode("-", $data9);
	$data9 = $data9 . " ";

	$data10 = explode(" ", $data10);
  	list($date) = $data10;
  	$data10 = array_reverse(explode("/", $date));
  	$data10 = implode("-", $data10);
	$data10 = $data10 . " ";

	$data11 = explode(" ", $data11);
  	list($date) = $data11;
  	$data11 = array_reverse(explode("/", $date));
  	$data11 = implode("-", $data11);
	$data11 = $data11 . " ";

	$data12 = explode(" ", $data12);
  	list($date) = $data12;
  	$data12 = array_reverse(explode("/", $date));
  	$data12 = implode("-", $data12);
	$data12 = $data12 . " ";

	$data13 = explode(" ", $data13);
  	list($date) = $data13;
  	$data13 = array_reverse(explode("/", $date));
  	$data13 = implode("-", $data13);
	$data13 = $data13 . " ";

	$data14 = explode(" ", $data14);
  	list($date) = $data14;
  	$data14 = array_reverse(explode("/", $date));
  	$data14 = implode("-", $data14);
	$data14 = $data14 . " ";

	$data15 = explode(" ", $data15);
  	list($date) = $data15;
  	$data15 = array_reverse(explode("/", $date));
  	$data15 = implode("-", $data15);
	$data15 = $data15 . " ";

	$data16 = explode(" ", $data16);
  	list($date) = $data16;
  	$data16 = array_reverse(explode("/", $date));
  	$data16 = implode("-", $data16);
	$data16 = $data16 . " ";

	$data17 = explode(" ", $data17);
  	list($date) = $data17;
  	$data17 = array_reverse(explode("/", $date));
  	$data17 = implode("-", $data17);
	$data17 = $data17 . " ";

	$data18 = explode(" ", $data18);
  	list($date) = $data18;
  	$data18 = array_reverse(explode("/", $date));
  	$data18 = implode("-", $data18);
	$data18 = $data18 . " ";

	$data19 = explode(" ", $data19);
  	list($date) = $data19;
  	$data19 = array_reverse(explode("/", $date));
  	$data19 = implode("-", $data19);
  	$data19 = $data19 . " ";

  	$data20 = explode(" ", $data20);
  	list($date) = $data20;
  	$data20 = array_reverse(explode("/", $date)); 
  	$data20 = implode("-", $data20);
  	$data20 = $data20 . " ";

    $objDb = new db();
	$link = $objDb->conecta_mysql();

	//DEPOIMENTOS

	$sql_fill = "INSERT INTO fills(data, Design) VALUES ('$data1', '$design')";

	$sql_id = "SELECT * from fills";
	$resultado_ids = mysqli_query($link, $sql_id);

                            if($resultado_ids){

                              while($registros = mysqli_fetch_array($resultado_ids, MYSQLI_ASSOC)){

                              		$id_fk = $registros['id'] + 1;
                              		echo $id_fk;

                              }

                            } else {
                              echo 'Erro na consulta dos emails no banco de dados!';
                            }

	$sql_depoimento1 = "INSERT INTO fills_depoimentos(Autor, Depoimento, ID_fills) VALUES ('$autor1', '$depoimento1', '$id_fk');";

	$sql_depoimento2 = "INSERT INTO fills_depoimentos(Autor, Depoimento, ID_fills) VALUES ('$autor2', '$depoimento2', '$id_fk');";

	$sql_depoimento3 = "INSERT INTO fills_depoimentos(Autor, Depoimento, ID_fills) VALUES ('$autor3', '$depoimento3', '$id_fk');";

	$sql_depoimento4 = "INSERT INTO fills_depoimentos(Autor, Depoimento, ID_fills) VALUES ('$autor4', '$depoimento4', '$id_fk');";

	//PROGRAMAÇÂO

	$sql_progamacao1 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data1', '$titulo1', '$sobre1', '$id_fk');";

	$sql_progamacao2 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data2', '$titulo2', '$sobre2', '$id_fk');";

	$sql_progamacao3 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data3', '$titulo3', '$sobre3', '$id_fk');";

	$sql_progamacao4 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data4', '$titulo4', '$sobre4', '$id_fk');";

	$sql_progamacao5 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data5', '$titulo5', '$sobre5', '$id_fk');";

	$sql_progamacao6 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data6', '$titulo6', '$sobre6', '$id_fk');";

	$sql_progamacao7 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data7', '$titulo7', '$sobre7', '$id_fk');";

	$sql_progamacao8 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data8', '$titulo8', '$sobre8', '$id_fk');";

	$sql_progamacao9 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data9', '$titulo9', '$sobre9', '$id_fk');";

	$sql_progamacao10 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data10', '$titulo10', '$sobre10', '$id_fk');";

	$sql_progamacao11 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data11', '$titulo11', '$sobre11', '$id_fk');";

	$sql_progamacao12 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data12', '$titulo12', '$sobre12', '$id_fk');";

	$sql_progamacao13 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data13', '$titulo13', '$sobre13', '$id_fk');";

	$sql_progamacao14 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data14', '$titulo14', '$sobre14', '$id_fk');";

	$sql_progamacao15 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data15', '$titulo15', '$sobre15', '$id_fk');";

	$sql_progamacao16 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data16', '$titulo16', '$sobre16', '$id_fk');";

	$sql_progamacao17 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data17', '$titulo17', '$sobre17', '$id_fk');";

	$sql_progamacao18 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data18', '$titulo18', '$sobre18', '$id_fk');";

	$sql_progamacao19 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data19', '$titulo19', '$sobre19', '$id_fk');";

	$sql_progamacao20 = "INSERT INTO fills_programacao(data, titulo, descricao, id_programacao) VALUES ('$data20', '$titulo20', '$sobre20', '$id_fk');";


	//NOTÍCIAS

	$sql_noticia1 = "INSERT INTO fills_notícias(Nome, Link, ID_noticias) VALUES ('$noticia1', '$link1', '$id_fk');";

	$sql_noticia2= "INSERT INTO fills_notícias(Nome, Link, ID_noticias) VALUES ('$noticia2','$link2','$id_fk');";

	$sql_noticia3= "INSERT INTO fills_notícias(Nome, Link, ID_noticias) VALUES ('$noticia3','$link3','$id_fk');";

	$sql_noticia4= "INSERT INTO fills_notícias(Nome, Link, ID_noticias) VALUES ('$noticia4', '$link4', '$id_fk');";

	$sql_noticia5= "INSERT INTO fills_notícias(Nome, Link, ID_noticias) VALUES ('$noticia5', '$link5', '$id_fk');";

	$sql_noticia6= "INSERT INTO fills_notícias(Nome, Link, ID_noticias) VALUES ('$noticia6', '$link6', '$id_fk');";

	//CONVIDADOS

	$sql_convidado1 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado1', '$estado1', '$id_fk');";

	$sql_convidado2 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado2', '$estado2', '$id_fk');";

	$sql_convidado3 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado3', '$estado3', '$id_fk');";

	$sql_convidado4 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado4', '$estado4', '$id_fk');";

	$sql_convidado5 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado5', '$estado5', '$id_fk');";

	$sql_convidado6 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado6', '$estado6', '$id_fk');";

	$sql_convidado7 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado7', '$estado7', '$id_fk');";

	$sql_convidado8 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado8', '$estado8', '$id_fk');";

	$sql_convidado9 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado9', '$estado9', '$id_fk');";

	$sql_convidado10 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado10', '$estado10', '$id_fk');";

	$sql_convidado11 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado11', '$estado11', '$id_fk');";

	$sql_convidado12 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado12', '$estado12', '$id_fk');";

	$sql_convidado13 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado13', '$estado13', '$id_fk');";

	$sql_convidado14 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado14', '$estado14', '$id_fk');";

	$sql_convidado15 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado15', '$estado15', '$id_fk');";

	$sql_convidado16 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado16', '$estado16', '$id_fk');";

	$sql_convidado17 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado17', '$estado17', '$id_fk');";

	$sql_convidado18 = "INSERT INTO fills_convidados(Nome, UF, ID_convidados) VALUES ('$convidado18', '$estado18', '$id_fk');";

	$sql_colaborador1 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb1', '$cargo1', '$id_fk');";

	$sql_colaborador2 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb2', '$cargo2', '$id_fk');";

	$sql_colaborador3 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb3', '$cargo3', '$id_fk');";

	$sql_colaborador4 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb4', '$cargo4', '$id_fk');";

	$sql_colaborador5 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb5', '$cargo5', '$id_fk');";

	$sql_colaborador6 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb6', '$cargo6', '$id_fk');";

	$sql_colaborador7 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb7', '$cargo7', '$id_fk');";

	$sql_colaborador8 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb8', '$cargo8', '$id_fk');";

	$sql_colaborador9 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb9', '$cargo9', '$id_fk');";

	$sql_colaborador10 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb10', '$cargo10', '$id_fk');";

	$sql_colaborador11 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb11', '$cargo11', '$id_fk');";

	$sql_colaborador12 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb12', '$cargo12', '$id_fk');";

	$sql_colaborador13 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb13', '$cargo13', '$id_fk');";

	$sql_colaborador14 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb14', '$cargo14', '$id_fk');";

	$sql_colaborador15 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb15', '$cargo15', '$id_fk');";

	$sql_colaborador16 = "INSERT INTO fills_colaboradores(Nome, Cargo, ID_colaboradores) VALUES ('$clb16', '$cargo16', '$id_fk');";


	mysqli_query($link, $sql_fill);

	mysqli_query($link, $sql_depoimento1);
	mysqli_query($link, $sql_depoimento2);
	mysqli_query($link, $sql_depoimento3);
	mysqli_query($link, $sql_depoimento4);

	mysqli_query($link, $sql_progamacao1);
	mysqli_query($link, $sql_progamacao2);
	mysqli_query($link, $sql_progamacao3);
	mysqli_query($link, $sql_progamacao4);
	mysqli_query($link, $sql_progamacao5);
	mysqli_query($link, $sql_progamacao6);
	mysqli_query($link, $sql_progamacao7);
	mysqli_query($link, $sql_progamacao8);
	mysqli_query($link, $sql_progamacao9);
	mysqli_query($link, $sql_progamacao10);
	mysqli_query($link, $sql_progamacao11);
	mysqli_query($link, $sql_progamacao12);
	mysqli_query($link, $sql_progamacao13);
	mysqli_query($link, $sql_progamacao14);
	mysqli_query($link, $sql_progamacao15);
	mysqli_query($link, $sql_progamacao16);
	mysqli_query($link, $sql_progamacao17);
	mysqli_query($link, $sql_progamacao18);
	mysqli_query($link, $sql_progamacao19);
	mysqli_query($link, $sql_progamacao20);

	mysqli_query($link, $sql_noticia1);
	mysqli_query($link, $sql_noticia2);
	mysqli_query($link, $sql_noticia3);
	mysqli_query($link, $sql_noticia4);
	mysqli_query($link, $sql_noticia5);
	mysqli_query($link, $sql_noticia6);

	mysqli_query($link, $sql_convidado1);
	mysqli_query($link, $sql_convidado2);
	mysqli_query($link, $sql_convidado3);
	mysqli_query($link, $sql_convidado4);
	mysqli_query($link, $sql_convidado5);
	mysqli_query($link, $sql_convidado6);
	mysqli_query($link, $sql_convidado7);
	mysqli_query($link, $sql_convidado8);
	mysqli_query($link, $sql_convidado9);
	mysqli_query($link, $sql_convidado10);
	mysqli_query($link, $sql_convidado11);
	mysqli_query($link, $sql_convidado12);
	mysqli_query($link, $sql_convidado13);
	mysqli_query($link, $sql_convidado14);
	mysqli_query($link, $sql_convidado15);
	mysqli_query($link, $sql_convidado16);
	mysqli_query($link, $sql_convidado17);
	mysqli_query($link, $sql_convidado18);

	mysqli_query($link, $sql_colaborador1);
	mysqli_query($link, $sql_colaborador2);
	mysqli_query($link, $sql_colaborador3);
	mysqli_query($link, $sql_colaborador4);
	mysqli_query($link, $sql_colaborador5);
	mysqli_query($link, $sql_colaborador6);
	mysqli_query($link, $sql_colaborador7);
	mysqli_query($link, $sql_colaborador8);
	mysqli_query($link, $sql_colaborador9);
	mysqli_query($link, $sql_colaborador10);
	mysqli_query($link, $sql_colaborador11);
	mysqli_query($link, $sql_colaborador12);
	mysqli_query($link, $sql_colaborador13);
	mysqli_query($link, $sql_colaborador14);
	mysqli_query($link, $sql_colaborador15);
	mysqli_query($link, $sql_colaborador16);

	$uploaded_images = array();
	foreach($_FILES['upload_images']['name'] as $key=>$val){
	$upload_dir = "../../dist/img/";
	$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
	$filename = $_FILES['upload_images']['name'][$key];
	if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
	$uploaded_images[] = $upload_file;
	$insert_sql = "INSERT INTO fills_galeria(file_name, upload_time, ID_fills)
	VALUES('".$filename."', '".time()."', '".$id_fk."')";
	mysqli_query($link, $insert_sql) or die("database error: ". mysqli_error($con));
	}
	}

    // Display status message
    echo $statusMsg;
	$url = '../fils.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
