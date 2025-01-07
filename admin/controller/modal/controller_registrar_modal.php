<?php
    require "../../model/model_modal.php";
    $MU = new Modelo_Modal();//Instaciamos
    $comunicado =strtoupper(htmlspecialchars($_POST['comunicado'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo =strtoupper(htmlspecialchars($_POST['nombrearchivo'],ENT_QUOTES,'UTF-8'));
    $idarea =strtoupper(htmlspecialchars($_POST['idarea'],ENT_QUOTES,'UTF-8'));

    $ruta;
    if (empty($nombrearchivo)) {
        $ruta = "";
    } else {
        $ruta = 'controller/modal/img/'.$nombrearchivo;
    }
    $consulta = $MU->Registrar_Modal($comunicado,$ruta,$idarea);
    echo $consulta;
    if($consulta==1){
        if (!empty($nombrearchivo)) {
            if (move_uploaded_file($_FILES['archivoobj']['tmp_name'], "img/" . $nombrearchivo));
        }
    }

?>