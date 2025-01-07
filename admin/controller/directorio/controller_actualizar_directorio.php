<?php
    require "../../model/model_directorio.php";
    $MU = new Modelo_Directorio();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $cargo =htmlspecialchars($_POST['cargo'],ENT_QUOTES,'UTF-8');
    $area =strtoupper(htmlspecialchars($_POST['area'],ENT_QUOTES,'UTF-8'));
    $empleado =strtoupper(htmlspecialchars($_POST['empleado'],ENT_QUOTES,'UTF-8'));
    $profesion =htmlspecialchars($_POST['profesion'],ENT_QUOTES,'UTF-8');
    $orden =strtoupper(htmlspecialchars($_POST['orden'],ENT_QUOTES,'UTF-8'));
    $consulta = $MU->Actualizar_Directorio($id,$cargo,$area,$empleado,$profesion,$orden);
    echo $consulta;
?>