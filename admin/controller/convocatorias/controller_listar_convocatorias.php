<?php
    require "../../model/model_convocatoria.php";
    $MU = new Modelo_Convocatoria();//Instaciamos
    $tipo =strtoupper(htmlspecialchars($_POST['tipo'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Listar_Convocatoria($tipo); 
    if($consulta){
        echo json_encode($consulta);
    }else{
        echo '{
            "sEcho": 1,
            "iTotalRecords": "0",
            "iTotalDisplayRecords": "0",
            "aaData": []
        }';
    }

?>   