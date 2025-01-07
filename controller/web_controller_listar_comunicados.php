<?php
    require "../model/web_model_comunicado.php";
    $MU = new Modelo_Comunicado();//Instaciamos
    $consulta = $MU->Listar_Comunicado(); 
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