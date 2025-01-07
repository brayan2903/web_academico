<?php
    require "../../model/model_directorio.php";
    $MU = new Modelo_Directorio();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Eliminar_Directorio($id);
    echo $consulta;

?>