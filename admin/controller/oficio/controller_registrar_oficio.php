<?php
    require "../../model/model_oficio.php";
    $MU = new Modelo_Oficio();//Instaciamos

    $titulo =strtoupper(htmlspecialchars($_POST['titulo'],ENT_QUOTES,'UTF-8'));
    $descripcion =strtoupper(htmlspecialchars($_POST['descripcion'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo =strtoupper(htmlspecialchars($_POST['nombrearchivo'],ENT_QUOTES,'UTF-8'));
    $nombrearchivoImg =strtoupper(htmlspecialchars($_POST['nombrearchivoImg'],ENT_QUOTES,'UTF-8'));
    $idarea =strtoupper(htmlspecialchars($_POST['idarea'],ENT_QUOTES,'UTF-8'));

    $ruta = 'controller/oficio/docs/'.$nombrearchivo;
    $rutaImg;
    if (empty($nombrearchivoImg)) {
        $rutaImg = "controller/oficio/img/default.png";
    } else {
        $rutaImg = 'controller/oficio/img/' . $nombrearchivoImg;
    }
    

    $consulta = $MU->Registrar_Oficio($titulo,$descripcion,$rutaImg,$ruta,$idarea);
    echo $consulta;
    if($consulta==1){
        if (!empty($nombrearchivo)) {
            if (move_uploaded_file($_FILES['archivoobj']['tmp_name'], "docs/" . $nombrearchivo));
        }
        if (!empty($nombrearchivoImg)) {
            if (move_uploaded_file($_FILES['archivoobjImg']['tmp_name'], "img/" . $nombrearchivoImg));
        }
    }

?>