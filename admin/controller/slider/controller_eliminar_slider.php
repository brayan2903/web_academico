<?php
    require "../../model/model_slider.php";
    $MU = new Modelo_Slider();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Eliminar_Slider($id);
    echo $consulta;

?>