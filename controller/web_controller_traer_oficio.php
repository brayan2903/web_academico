<?php
    require "../model/web_model_oficios.php";
    $MU = new Modelo_Oficio();//Instaciamos
    $id =htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8');
    $consulta = $MU->Traer_Documento_Ofi($id); 
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