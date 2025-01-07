<?php
    require "../model/web_model_oficios.php";
    $MU = new Modelo_Oficio();//Instaciamos
    $cantidad =htmlspecialchars($_POST['cantidad'],ENT_QUOTES,'UTF-8');
    $consulta = $MU->Listar_Oficios_Recientes($cantidad); 
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