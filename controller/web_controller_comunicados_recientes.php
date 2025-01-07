<?php
    require "../model/web_model_comunicado.php";
    $MU = new Modelo_Comunicado();//Instaciamos
    $cantidad =htmlspecialchars($_POST['cantidad'],ENT_QUOTES,'UTF-8');
    $consulta = $MU->Listar_Comunicados_Recientes($cantidad); 
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