<?php
    require "../../model/model_reclamo.php";
    $MU = new Modelo_Reclamo();//Instaciamos
    $consulta = $MU->Listar_Reclamo(); 
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