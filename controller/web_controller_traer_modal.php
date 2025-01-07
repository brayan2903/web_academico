<?php
    require "../model/web_model_modal.php";
    $MU = new Modelo_Modal();//Instaciamos
    $consulta = $MU->Listar_Modal(); 
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