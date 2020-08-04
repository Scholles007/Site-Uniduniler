<?php
    require_once('../usuario/db.class.php');
    require_once('../usuario/fils/to_romano.php');

    $objDb = new Db();
    $link = $objDb->conecta_mysql();

        $id = $_GET['id'];
        $certo = 20*$id - 14;
            $sql = " SELECT * FROM fills_programacao WHERE id = $certo and titulo !=''";
            $resultado_id = mysqli_query($link, $sql);
            if($resultado_id){

                while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                    
                    $data = $registro['data'];
                    $titulo = $registro['titulo'];
                    $descricao = $registro['descricao'];
                    $timestamp = strtotime($data);
                    $date = date('d/m/Y', $timestamp);
                    
                    echo "<div class='col-md-12 text-center centroz'>";
                    echo "<span class='marmalade datac'>$date</span><br>";
                    echo "<span class='poppinsextra textoc'><span class='b5a'>$descricao<br>$titulo</span>";
                    echo "</div>";
                }

            }else{
                echo 'Erro na consulta';
            }
        ?>             
