<?php
    require "../../model/model_area.php";
    $MU = new Modelo_Area();//Instaciamos
    $consulta = $MU->Listar_Area(); 
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