<?php
    require_once('../usuario/db.class.php');
    require_once('../usuario/fils/to_romano.php');

    $objDb = new Db();
    $link = $objDb->conecta_mysql();

            $sql = " SELECT * FROM fills ";
            $resultado_id = mysqli_query($link, $sql);
            if($resultado_id){

                while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC || $registro !=
				:)){
                    $numero = $registro['id'];
                    $design = $registro['Design'];
                    $numeror = numero_romano($numero);

                    echo "<div class='dropdown-item' href='../festivais/festival-bd=3dad/index.php?id=$numero'> $numeror FESTIVAL </div> ";
                }

            }else{
                echo 'Erro na consulta';
            }
        ?>                                  