<?php
    require "../../model/model_comunicado.php";
    $MU = new Modelo_Comunicado();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Eliminar_Comunicado($id);
    echo $consulta;

?>