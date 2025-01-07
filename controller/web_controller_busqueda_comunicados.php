<?php
    require "../model/web_model_comunicado.php";
    $MU = new Modelo_Comunicado();//Instaciamos
    $texto =htmlspecialchars($_POST['texto'],ENT_QUOTES,'UTF-8');
    $consulta = $MU->Buscar_Comunicado($texto); 
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