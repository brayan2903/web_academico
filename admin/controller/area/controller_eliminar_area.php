<?php
    require "../../model/model_area.php";
    $MU = new Modelo_Area();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));


    $consulta = $MU->Eliminar_Area($id);
    echo $consulta;

?>