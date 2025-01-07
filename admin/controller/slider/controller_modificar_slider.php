<?php
    require "../../model/model_slider.php";
    $MU = new Modelo_Slider();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $titulo =strtoupper(htmlspecialchars($_POST['titulo'],ENT_QUOTES,'UTF-8'));
    $descripcion =strtoupper(htmlspecialchars($_POST['descripcion'],ENT_QUOTES,'UTF-8'));
    $nombrearchivoImg =strtoupper(htmlspecialchars($_POST['nombrearchivoImg'],ENT_QUOTES,'UTF-8'));
    $orden =strtoupper(htmlspecialchars($_POST['orden'],ENT_QUOTES,'UTF-8'));
    $estado = strtoupper(htmlspecialchars($_POST['estado'], ENT_QUOTES, 'UTF-8'));

    $rutaImg;
    if (empty($nombrearchivoImg)) {
        $rutaImg = "";
    } else {
        $rutaImg = 'controller/slider/img/'.$nombrearchivoImg;
    }

    $consulta = $MU->Modificar_Slider($id,$titulo,$descripcion,$rutaImg,$orden,$estado);
    echo $consulta;
    if($consulta==1){
        if (!empty($nombrearchivoImg)) {
            if (move_uploaded_file($_FILES['archivoobjImg']['tmp_name'], "img/" . $nombrearchivoImg));
        }
    }

?>