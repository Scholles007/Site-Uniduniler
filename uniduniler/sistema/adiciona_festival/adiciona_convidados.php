<?php 
    require_once('../usuario/db.class.php');
    require_once('../usuario/fils/to_romano.php');

    $objDb = new Db();
    $link = $objDb->conecta_mysql();

        $id = $_GET['id'];


            $sql = " SELECT * FROM fills_convidados WHERE id_convidados = $id and Nome != ''";
            $resultado_id = mysqli_query($link, $sql);
            if($resultado_id){

                while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                    $nome = $registro['Nome'];
                    $uf = $registro['UF'];
                    

                    echo '<span class="poppinsextra f1">'.$nome.'  </span>';
                    echo '<span class="poppinsextra f1">('.$uf.'), </span>';
                      
                }

            }else{
                echo 'Erro na consulta';
            }
        ?>                                  