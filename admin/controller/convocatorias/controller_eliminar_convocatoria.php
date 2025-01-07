<?php
    require "../../model/model_convocatoria.php";
    $MU = new Modelo_Convocatoria();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Eliminar_Convocatoria($id);
    echo $consulta;

?>