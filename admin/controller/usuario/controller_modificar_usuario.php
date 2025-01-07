<?php
    require "../../model/model_usuario.php";
    $MU = new Modelo_Usuario();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $ide =strtoupper(htmlspecialchars($_POST['ide'],ENT_QUOTES,'UTF-8'));
    $ida =strtoupper(htmlspecialchars($_POST['ida'],ENT_QUOTES,'UTF-8'));
    $rol =strtoupper(htmlspecialchars($_POST['rol'],ENT_QUOTES,'UTF-8'));

    $consulta = $MU->Modificar_Usuario($id,$ide,$ida,$rol);
    echo $consulta;

?>