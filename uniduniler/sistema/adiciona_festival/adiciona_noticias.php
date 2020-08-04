<?php
    require_once('../usuario/db.class.php');
    require_once('../usuario/fils/to_romano.php');
         

    $objDb = new Db();
    $link = $objDb->conecta_mysql();    

    
    $id = $_GET['id'];
    
    $sql = " SELECT * FROM fills_notícias WHERE ID_noticias =$id ";

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        
        while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
            $nome = $registro['Nome'];
            $link = $registro['Link'];
            
            echo "<div class='row justify-content-center'>";
            echo "<div class='col-md-2'>";
            echo "<a target='__blank' href='http://cerlalc.org/es/evento/iv-festival-itinerante-lectura/'>";
            echo "<div class='botao_haha btn-borboleta'>";
            echo "<a align= 'center'  class='texto_button'>$nome</a>'";
            echo "</div>";
            echo "</a>";
            echo "</div>";
            echo "</div>";
        }
        
    }else{
        echo 'Erro na consulta';
    }
?>