<?php
    require "../../model/model_modal.php";
    $MU = new Modelo_Modal();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Eliminar_Modal($id);
    echo $consulta;

?>