<?php
    require_once('../usuario/db.class.php');
    require_once('../usuario/fils/to_romano.php');
         

    $objDb = new Db();
    $link = $objDb->conecta_mysql();    

    
    $id = $_GET['id'];
    
    $sql = " SELECT * FROM fills_colaboradores WHERE id_colaboradores = $id and Nome != ''";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        
        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
            $nome = $registro['Nome'];
            $cargo = $registro['Cargo'];
                echo '<b><span class="poppinsextra f1">'.$cargo.'</b></função>';
                echo ',';
                echo '<span class="poppinsextra f1"> '.$nome.'</span>';
                echo '<br>';
        }
        
    }else{
        echo 'Erro na consulta';
    }
?>