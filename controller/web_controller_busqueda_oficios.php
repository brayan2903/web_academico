<?php
    require "../model/web_model_oficios.php";
    $MU = new Modelo_Oficio();//Instaciamos
    $texto =htmlspecialchars($_POST['texto'],ENT_QUOTES,'UTF-8');
    $consulta = $MU->Buscar_Oficios($texto); 
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