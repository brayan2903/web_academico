<?php
    require "../../model/model_directorio.php";
    $MU = new Modelo_Directorio();//Instaciamos
    $consulta = $MU->Listar_Directorio();
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
