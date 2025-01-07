<?php
    require "../../model/model_oficio.php";
    $MU = new Modelo_Oficio();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Eliminar_Oficio($id);
    echo $consulta;

?>