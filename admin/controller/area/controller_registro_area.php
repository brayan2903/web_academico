<?php
    require "../../model/model_area.php";
    $MU = new Modelo_Area();//Instaciamos
    $area =strtoupper(htmlspecialchars($_POST['a'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Registrar_Area($area);
    echo $consulta;

?>