<?php
    require "../../model/model_perfil.php";
    $MU = new Modelo_Perfil();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $dni =strtoupper(htmlspecialchars($_POST['dni'],ENT_QUOTES,'UTF-8'));
    $nombre =strtoupper(htmlspecialchars($_POST['nombre'],ENT_QUOTES,'UTF-8'));
    $paterno =strtoupper(htmlspecialchars($_POST['paterno'],ENT_QUOTES,'UTF-8'));
    $materno =strtoupper(htmlspecialchars($_POST['materno'],ENT_QUOTES,'UTF-8'));
    $cel =strtoupper(htmlspecialchars($_POST['cel'],ENT_QUOTES,'UTF-8'));
    $nac =strtoupper(htmlspecialchars($_POST['nac'],ENT_QUOTES,'UTF-8'));
    $email =strtoupper(htmlspecialchars($_POST['email'],ENT_QUOTES,'UTF-8'));
    $dir =strtoupper(htmlspecialchars($_POST['dir'],ENT_QUOTES,'UTF-8'));
    $nombrearchivoImg =strtoupper(htmlspecialchars($_POST['nombrearchivoImg'],ENT_QUOTES,'UTF-8'));


    $rutaImg;
    if (empty($nombrearchivoImg)) {
        $rutaImg = "";
    } else {
        $rutaImg = 'controller/empleado/foto/'.$nombrearchivoImg;
    }
    $consulta = $MU->Modificar_Perfil($id,$dni,$nombre,$paterno,$materno,$cel,$nac,$email,$dir,$rutaImg);
    echo $consulta;
    if($consulta==1){
        if (!empty($nombrearchivoImg)) {
            if (move_uploaded_file($_FILES['archivoobjImg']['tmp_name'], "../empleado/foto/" . $nombrearchivoImg));
        }
    }

?>   