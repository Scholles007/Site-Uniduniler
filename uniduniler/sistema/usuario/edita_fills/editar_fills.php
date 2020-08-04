<?php

	session_start();

    if(!$_SESSION['Email']){
        header('Location: index.php?erro=1');
    }
	require_once('../db.class.php');
	$design	= $_POST['tema'];

	$id = $_GET['id'];

	$id1 = 4*$id - 3;
	$id2 = 4*$id - 2;
	$id3 = 4*$id - 1;
	$id4 = 4*$id;

	$id_prog1 = 20*$id - 19;
	$id_prog2 = 20*$id - 18;
	$id_prog3 = 20*$id - 17;
	$id_prog4 = 20*$id - 16;
	$id_prog5 = 20*$id - 15;
	$id_prog6 = 20*$id - 14;
	$id_prog7 = 20*$id - 13;
	$id_prog8 = 20*$id - 12;
	$id_prog9 = 20*$id - 11;
	$id_prog10 = 20*$id - 10;
	$id_prog11 = 20*$id - 9;
	$id_prog12 = 20*$id - 8;
	$id_prog13 = 20*$id - 7;
	$id_prog14 = 20*$id - 6;
	$id_prog15 = 20*$id - 5;
	$id_prog16 = 20*$id - 4;
	$id_prog17 = 20*$id - 3;
	$id_prog18 = 20*$id - 2;
	$id_prog19 = 20*$id - 1;
	$id_prog20 = 20*$id;

	$id_not1 = 6*$id - 5;
	$id_not2 = 6*$id - 4;
	$id_not3 = 6*$id - 3;
	$id_not4 = 6*$id - 2;
	$id_not5 = 6*$id - 1;
	$id_not6 = 6*$id;

	$id_conv1 = 18*$id - 17;
	$id_conv2 = 18*$id - 16;
	$id_conv3 = 18*$id - 15;
	$id_conv4 = 18*$id - 14;
	$id_conv5 = 18*$id - 13;
	$id_conv6 = 18*$id - 12;
	$id_conv7 = 18*$id - 11;
	$id_conv8 = 18*$id - 10;
	$id_conv9 = 18*$id - 9;
	$id_conv10 = 18*$id - 8;
	$id_conv11 = 18*$id - 7;
	$id_conv12 = 18*$id - 6;
	$id_conv13 = 18*$id - 5;
	$id_conv14 = 18*$id - 4;
	$id_conv15 = 18*$id - 3;
	$id_conv16 = 18*$id - 2;
	$id_conv17 = 18*$id - 1;
	$id_conv18 = 18*$id; 

	$id_colab1 = 16*$id - 15;
	$id_colab2 = 16*$id - 14;
	$id_colab3 = 16*$id - 13;
	$id_colab4 = 16*$id - 12;
	$id_colab5 = 16*$id - 11;
	$id_colab6 = 16*$id - 10;
	$id_colab7 = 16*$id - 9;
	$id_colab8 = 16*$id - 8;
	$id_colab9 = 16*$id - 7;
	$id_colab10 = 16*$id - 6;
	$id_colab11 = 16*$id - 5;
	$id_colab12 = 16*$id - 4;
	$id_colab13 = 16*$id - 3;
	$id_colab14 = 16*$id - 2;
	$id_colab15 = 16*$id - 1;
	$id_colab16 = 16*$id;

	$autor1 = $_POST['autor1'];
	$depoimento1 = $_POST['depoimento1'];
	$autor2 = $_POST['autor2'];
	$depoimento2 = $_POST['depoimento2'];
	$autor3 = $_POST['autor3'];
	$depoimento3 = $_POST['depoimento3'];
	$autor4 = $_POST['autor4'];
	$depoimento4 = $_POST['depoimento4'];

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

    $objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql_depoimento1 = "UPDATE `fills_depoimentos` SET `ID`= '$id1',`Autor`= '$autor1',`Depoimento`= '$depoimento1',`ID_fills`= '$id' WHERE ID = $id1";
	$sql_depoimento2 = "UPDATE `fills_depoimentos` SET `ID`= '$id2',`Autor`= '$autor2',`Depoimento`= '$depoimento2',`ID_fills`= '$id' WHERE ID = $id2";
	$sql_depoimento3 = "UPDATE `fills_depoimentos` SET `ID`= '$id3',`Autor`= '$autor3',`Depoimento`= '$depoimento3',`ID_fills`= '$id' WHERE ID = $id3";
	$sql_depoimento4 = "UPDATE `fills_depoimentos` SET `ID`= '$id4',`Autor`= '$autor4',`Depoimento`= '$depoimento4',`ID_fills`= '$id' WHERE ID = $id4";

	$sql_noticia1 = "UPDATE `fills_notícias` SET `ID`='$id_not1',`Nome`= '$noticia1',`Link`='$link1',`ID_noticias`='$id' WHERE ID = '$id_not1'";
	$sql_noticia2 = "UPDATE `fills_notícias` SET `ID`='$id_not2',`Nome`= '$noticia2',`Link`='$link2',`ID_noticias`='$id' WHERE ID = '$id_not2'";
	$sql_noticia3 = "UPDATE `fills_notícias` SET `ID`='$id_not3',`Nome`= '$noticia3',`Link`='$link3',`ID_noticias`='$id' WHERE ID = '$id_not3'";
	$sql_noticia4 = "UPDATE `fills_notícias` SET `ID`='$id_not4',`Nome`= '$noticia4',`Link`='$link4',`ID_noticias`='$id' WHERE ID = '$id_not4'";
	$sql_noticia5 = "UPDATE `fills_notícias` SET `ID`='$id_not5',`Nome`= '$noticia5',`Link`='$link5',`ID_noticias`='$id' WHERE ID = '$id_not5'";
	$sql_noticia6 = "UPDATE `fills_notícias` SET `ID`='$id_not6',`Nome`= '$noticia6',`Link`='$link6',`ID_noticias`='$id' WHERE ID = '$id_not6'";

	$sql_convidado1 = "UPDATE `fills_convidados` SET `ID`='$id_conv1',`Nome`='$convidado1',`UF`='$estado1',`ID_convidados`='$id' WHERE ID = '$id_conv1'";
	$sql_convidado2 = "UPDATE `fills_convidados` SET `ID`='$id_conv2',`Nome`='$convidado2',`UF`='$estado2',`ID_convidados`='$id' WHERE ID = '$id_conv2'";
	$sql_convidado3 = "UPDATE `fills_convidados` SET `ID`='$id_conv3',`Nome`='$convidado3',`UF`='$estado3',`ID_convidados`='$id' WHERE ID = '$id_conv3'";
	$sql_convidado4 = "UPDATE `fills_convidados` SET `ID`='$id_conv4',`Nome`='$convidado4',`UF`='$estado4',`ID_convidados`='$id' WHERE ID = '$id_conv4'";
	$sql_convidado5 = "UPDATE `fills_convidados` SET `ID`='$id_conv5',`Nome`='$convidado5',`UF`='$estado5',`ID_convidados`='$id' WHERE ID = '$id_conv5'";
	$sql_convidado6 = "UPDATE `fills_convidados` SET `ID`='$id_conv6',`Nome`='$convidado6',`UF`='$estado6',`ID_convidados`='$id' WHERE ID = '$id_conv6'";
	$sql_convidado7 = "UPDATE `fills_convidados` SET `ID`='$id_conv7',`Nome`='$convidado7',`UF`='$estado7',`ID_convidados`='$id' WHERE ID = '$id_conv7'";
	$sql_convidado8 = "UPDATE `fills_convidados` SET `ID`='$id_conv8',`Nome`='$convidado8',`UF`='$estado8',`ID_convidados`='$id' WHERE ID = '$id_conv8'";
	$sql_convidado9 = "UPDATE `fills_convidados` SET `ID`='$id_conv9',`Nome`='$convidado9',`UF`='$estado9',`ID_convidados`='$id' WHERE ID = '$id_conv9'";
	$sql_convidado10 = "UPDATE `fills_convidados` SET `ID`='$id_conv10',`Nome`='$convidado10',`UF`='$estado10',`ID_convidados`='$id' WHERE ID = '$id_conv10'";
	$sql_convidado11 = "UPDATE `fills_convidados` SET `ID`='$id_conv11',`Nome`='$convidado11',`UF`='$estado11',`ID_convidados`='$id' WHERE ID = '$id_conv11'";
	$sql_convidado12 = "UPDATE `fills_convidados` SET `ID`='$id_conv12',`Nome`='$convidado12',`UF`='$estado12',`ID_convidados`='$id' WHERE ID = '$id_conv12'";
	$sql_convidado13 = "UPDATE `fills_convidados` SET `ID`='$id_conv13',`Nome`='$convidado13',`UF`='$estado13',`ID_convidados`='$id' WHERE ID = '$id_conv13'";
	$sql_convidado14 = "UPDATE `fills_convidados` SET `ID`='$id_conv14',`Nome`='$convidado14',`UF`='$estado14',`ID_convidados`='$id' WHERE ID = '$id_conv14'";
	$sql_convidado15 = "UPDATE `fills_convidados` SET `ID`='$id_conv15',`Nome`='$convidado15',`UF`='$estado15',`ID_convidados`='$id' WHERE ID = '$id_conv15'";
	$sql_convidado16 = "UPDATE `fills_convidados` SET `ID`='$id_conv16',`Nome`='$convidado16',`UF`='$estado16',`ID_convidados`='$id' WHERE ID = '$id_conv16'";
	$sql_convidado17 = "UPDATE `fills_convidados` SET `ID`='$id_conv17',`Nome`='$convidado17',`UF`='$estado17',`ID_convidados`='$id' WHERE ID = '$id_conv17'";
	$sql_convidado18 = "UPDATE `fills_convidados` SET `ID`='$id_conv18',`Nome`='$convidado18',`UF`='$estado18',`ID_convidados`='$id' WHERE ID = '$id_conv18'";

	$sql_colaborador1 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab1',`Nome`='$clb1',`Cargo`='$cargo1',`ID_colaboradores`= '$id' WHERE ID = '$id_colab1'";
	$sql_colaborador2 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab2',`Nome`='$clb2',`Cargo`='$cargo2',`ID_colaboradores`= '$id' WHERE ID = '$id_colab2'";
	$sql_colaborador3 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab3',`Nome`='$clb3',`Cargo`='$cargo3',`ID_colaboradores`= '$id' WHERE ID = '$id_colab3'";
	$sql_colaborador4 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab4',`Nome`='$clb4',`Cargo`='$cargo4',`ID_colaboradores`= '$id' WHERE ID = '$id_colab4'";
	$sql_colaborador5 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab5',`Nome`='$clb5',`Cargo`='$cargo5',`ID_colaboradores`= '$id' WHERE ID = '$id_colab5'";
	$sql_colaborador6 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab6',`Nome`='$clb6',`Cargo`='$cargo6',`ID_colaboradores`= '$id' WHERE ID = '$id_colab6'";
	$sql_colaborador7 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab7',`Nome`='$clb7',`Cargo`='$cargo7',`ID_colaboradores`= '$id' WHERE ID = '$id_colab7'";
	$sql_colaborador8 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab8',`Nome`='$clb8',`Cargo`='$cargo8',`ID_colaboradores`= '$id' WHERE ID = '$id_colab8'";
	$sql_colaborador9 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab9',`Nome`='$clb9',`Cargo`='$cargo9',`ID_colaboradores`= '$id' WHERE ID = '$id_colab9'";
	$sql_colaborador10 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab10',`Nome`='$clb10',`Cargo`='$cargo10',`ID_colaboradores`= '$id' WHERE ID = '$id_colab10'";
	$sql_colaborador11 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab11',`Nome`='$clb11',`Cargo`='$cargo11',`ID_colaboradores`= '$id' WHERE ID = '$id_colab11'";
	$sql_colaborador12 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab12',`Nome`='$clb12',`Cargo`='$cargo12',`ID_colaboradores`= '$id' WHERE ID = '$id_colab12'";
	$sql_colaborador13 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab13',`Nome`='$clb13',`Cargo`='$cargo13',`ID_colaboradores`= '$id' WHERE ID = '$id_colab13'";
	$sql_colaborador14 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab14',`Nome`='$clb14',`Cargo`='$cargo14',`ID_colaboradores`= '$id' WHERE ID = '$id_colab14'";
	$sql_colaborador15 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab15',`Nome`='$clb15',`Cargo`='$cargo15',`ID_colaboradores`= '$id' WHERE ID = '$id_colab15'";
	$sql_colaborador16 = "UPDATE `fills_colaboradores` SET `ID`='$id_colab16',`Nome`='$clb16',`Cargo`='$cargo16',`ID_colaboradores`= '$id' WHERE ID = '$id_colab16'";

	$sql_programacao1 = "UPDATE `fills_programacao` SET `id`='$id_prog1',`data`='$data1',`titulo`= '$titulo1',`descricao`= '$sobre1',`id_programacao`= '$id' WHERE id = '$id_prog1'";
	$sql_programacao2 = "UPDATE `fills_programacao` SET `id`='$id_prog2',`data`='$data2',`titulo`= '$titulo2',`descricao`= '$sobre2',`id_programacao`= '$id' WHERE id = '$id_prog2'";
	$sql_programacao3 = "UPDATE `fills_programacao` SET `id`='$id_prog3',`data`='$data3',`titulo`= '$titulo3',`descricao`= '$sobre3',`id_programacao`= '$id' WHERE id = '$id_prog3'";
	$sql_programacao4 = "UPDATE `fills_programacao` SET `id`='$id_prog4',`data`='$data4',`titulo`= '$titulo4',`descricao`= '$sobre4',`id_programacao`= '$id' WHERE id = '$id_prog4'";
	$sql_programacao5 = "UPDATE `fills_programacao` SET `id`='$id_prog5',`data`='$data5',`titulo`= '$titulo5',`descricao`= '$sobre5',`id_programacao`= '$id' WHERE id = '$id_prog5'";
	$sql_programacao6 = "UPDATE `fills_programacao` SET `id`='$id_prog6',`data`='$data6',`titulo`= '$titulo6',`descricao`= '$sobre6',`id_programacao`= '$id' WHERE id = '$id_prog6'";
	$sql_programacao7 = "UPDATE `fills_programacao` SET `id`='$id_prog7',`data`='$data7',`titulo`= '$titulo7',`descricao`= '$sobre7',`id_programacao`= '$id' WHERE id = '$id_prog7'";
	$sql_programacao8 = "UPDATE `fills_programacao` SET `id`='$id_prog8',`data`='$data8',`titulo`= '$titulo8',`descricao`= '$sobre8',`id_programacao`= '$id' WHERE id = '$id_prog8'";
	$sql_programacao9 = "UPDATE `fills_programacao` SET `id`='$id_prog9',`data`='$data9',`titulo`= '$titulo9',`descricao`= '$sobre9',`id_programacao`= '$id' WHERE id = '$id_prog9'";
	$sql_programacao10 = "UPDATE `fills_programacao` SET `id`='$id_prog10',`data`='$data10',`titulo`= '$titulo10',`descricao`= '$sobre10',`id_programacao`= '$id' WHERE id = '$id_prog10'";
	$sql_programacao11 = "UPDATE `fills_programacao` SET `id`='$id_prog11',`data`='$data11',`titulo`= '$titulo11',`descricao`= '$sobre11',`id_programacao`= '$id' WHERE id = '$id_prog11'";
	$sql_programacao12 = "UPDATE `fills_programacao` SET `id`='$id_prog12',`data`='$data12',`titulo`= '$titulo12',`descricao`= '$sobre12',`id_programacao`= '$id' WHERE id = '$id_prog12'";
	$sql_programacao13 = "UPDATE `fills_programacao` SET `id`='$id_prog13',`data`='$data13',`titulo`= '$titulo13',`descricao`= '$sobre13',`id_programacao`= '$id' WHERE id = '$id_prog13'";
	$sql_programacao14 = "UPDATE `fills_programacao` SET `id`='$id_prog14',`data`='$data14',`titulo`= '$titulo14',`descricao`= '$sobre14',`id_programacao`= '$id' WHERE id = '$id_prog14'";
	$sql_programacao15 = "UPDATE `fills_programacao` SET `id`='$id_prog15',`data`='$data15',`titulo`= '$titulo15',`descricao`= '$sobre15',`id_programacao`= '$id' WHERE id = '$id_prog15'";
	$sql_programacao16 = "UPDATE `fills_programacao` SET `id`='$id_prog16',`data`='$data16',`titulo`= '$titulo16',`descricao`= '$sobre16',`id_programacao`= '$id' WHERE id = '$id_prog16'";
	$sql_programacao17 = "UPDATE `fills_programacao` SET `id`='$id_prog17',`data`='$data17',`titulo`= '$titulo17',`descricao`= '$sobre17',`id_programacao`= '$id' WHERE id = '$id_prog17'";
	$sql_programacao18 = "UPDATE `fills_programacao` SET `id`='$id_prog18',`data`='$data18',`titulo`= '$titulo18',`descricao`= '$sobre18',`id_programacao`= '$id' WHERE id = '$id_prog18'";
	$sql_programacao19 = "UPDATE `fills_programacao` SET `id`='$id_prog19',`data`='$data19',`titulo`= '$titulo19',`descricao`= '$sobre19',`id_programacao`= '$id' WHERE id = '$id_prog19'";
	$sql_programacao20 = "UPDATE `fills_programacao` SET `id`='$id_prog20',`data`='$data20',`titulo`= '$titulo20',`descricao`= '$sobre20',`id_programacao`= '$id' WHERE id = '$id_prog20'";


	$sql_fill = "UPDATE `fills` SET `id`= '$id',`data`='$data1',`Edição`= '$id',`Design`= '$design' WHERE id ='$id' ";

	mysqli_query($link, $sql_fill);

	mysqli_query($link, $sql_depoimento1);
	mysqli_query($link, $sql_depoimento2);
	mysqli_query($link, $sql_depoimento3);
	mysqli_query($link, $sql_depoimento4);

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

    mysqli_query($link, $sql_programacao1);
    mysqli_query($link, $sql_programacao2);
    mysqli_query($link, $sql_programacao3);
    mysqli_query($link, $sql_programacao4);
    mysqli_query($link, $sql_programacao5);
    mysqli_query($link, $sql_programacao6);
    mysqli_query($link, $sql_programacao7);
    mysqli_query($link, $sql_programacao8);
    mysqli_query($link, $sql_programacao9);
    mysqli_query($link, $sql_programacao10);
    mysqli_query($link, $sql_programacao11);
    mysqli_query($link, $sql_programacao12);
    mysqli_query($link, $sql_programacao13);
    mysqli_query($link, $sql_programacao14);
    mysqli_query($link, $sql_programacao15);
    mysqli_query($link, $sql_programacao16);
    mysqli_query($link, $sql_programacao17);
    mysqli_query($link, $sql_programacao18);
    mysqli_query($link, $sql_programacao19);
    mysqli_query($link, $sql_programacao20);

    $uploaded_images = array();
	foreach($_FILES['upload_images']['name'] as $key=>$val){
	$upload_dir = "../../dist/img/";
	$upload_file = $upload_dir.$_FILES['upload_images']['name'][$key];
	$filename = $_FILES['upload_images']['name'][$key];
	if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_file)){
	$uploaded_images[] = $upload_file;
	$insert_sql = "INSERT INTO fills_galeria(file_name, upload_time, ID_fills)
	VALUES('".$filename."', '".time()."', '".$id."')";
	mysqli_query($link, $insert_sql) or die("database error: ". mysqli_error($con));
	}
	}


    // Display status message
	//echo $statusMsg;
	$url = '../fils.php';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

   





