<?php
    require "../model/web_model_oficios.php";
    $MU = new Modelo_Oficio();//Instaciamos
    $consulta = $MU->Listar_Oficios(); 
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