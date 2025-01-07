<?php
    require "../../model/model_empleado.php";
    $MU = new Modelo_Empleado();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Eliminar_Empleado($id);
    echo $consulta;

?>