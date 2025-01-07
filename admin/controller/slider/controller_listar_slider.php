<?php
    require "../../model/model_slider.php";
    $MU = new Modelo_Slider();//Instaciamos
    $consulta = $MU->Listar_Slider(); 
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