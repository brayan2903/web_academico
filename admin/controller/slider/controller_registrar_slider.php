<?php
    require "../../model/model_slider.php";
    $MU = new Modelo_Slider();//Instaciamos

    $titulo =strtoupper(htmlspecialchars($_POST['titulo'],ENT_QUOTES,'UTF-8'));
    $descripcion =strtoupper(htmlspecialchars($_POST['descripcion'],ENT_QUOTES,'UTF-8'));
    $nombrearchivoImg =strtoupper(htmlspecialchars($_POST['nombrearchivoImg'],ENT_QUOTES,'UTF-8'));
    $orden =strtoupper(htmlspecialchars($_POST['orden'],ENT_QUOTES,'UTF-8'));
    $idarea =strtoupper(htmlspecialchars($_POST['idarea'],ENT_QUOTES,'UTF-8'));

    $rutaImg = 'controller/slider/img/'.$nombrearchivoImg;
    $consulta = $MU->Registrar_Slider($titulo,$descripcion,$rutaImg,$orden,$idarea);
    echo $consulta;
    if($consulta==1){
        if(move_uploaded_file($_FILES['archivoobjImg']['tmp_name'],"img/".$nombrearchivoImg));
    }

?>