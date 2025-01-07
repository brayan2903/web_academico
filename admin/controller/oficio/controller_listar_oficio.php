<?php
    require "../../model/model_oficio.php";
    $MU = new Modelo_Oficio();//Instaciamos
    $consulta = $MU->Listar_Oficio(); 
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