<?php
    require "../../model/model_convocatoria.php";
    $MU = new Modelo_Convocatoria();//Instaciamos

    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $titulo =strtoupper(htmlspecialchars($_POST['titulo'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo1 =strtoupper(htmlspecialchars($_POST['nombrearchivo1'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo2 =strtoupper(htmlspecialchars($_POST['nombrearchivo2'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo3 =strtoupper(htmlspecialchars($_POST['nombrearchivo3'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo4 =strtoupper(htmlspecialchars($_POST['nombrearchivo4'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo5 =strtoupper(htmlspecialchars($_POST['nombrearchivo5'],ENT_QUOTES,'UTF-8'));
    $estado =strtoupper(htmlspecialchars($_POST['estado'],ENT_QUOTES,'UTF-8'));

    $ruta1;
    $ruta2;
    $ruta3;
    $ruta4;
    $ruta5;

    if (empty($nombrearchivo1)) {
        $ruta1 = "";
    } else {
        $ruta1 = 'controller/convocatorias/docs/' . $nombrearchivo1;
    }

    if (empty($nombrearchivo2)) {
        $ruta2 = "";
    } else {
        $ruta2 = 'controller/convocatorias/docs/' . $nombrearchivo2;
    }

    if (empty($nombrearchivo3)) {
        $ruta3 = "";
    } else {
        $ruta3 = 'controller/convocatorias/docs/' . $nombrearchivo3;
    }

    if (empty($nombrearchivo4)) {
        $ruta4 = "";
    } else {
        $ruta4 = 'controller/convocatorias/docs/' . $nombrearchivo4;
    }

    if (empty($nombrearchivo5)) {
        $ruta5 = "";
    } else {
        $ruta5 = 'controller/convocatorias/docs/' . $nombrearchivo5;
    }
    
    $consulta = $MU->Modificar_Convocatoria($id,$titulo,$ruta1,$ruta2,$ruta3,$ruta4,$ruta5,$estado);
    echo $consulta;
    if($consulta==1){
        if (!empty($nombrearchivo1)) {
            if (move_uploaded_file($_FILES['archivoobj1']['tmp_name'], "docs/" . $nombrearchivo1));
        }
        if (!empty($nombrearchivo2)) {
            if (move_uploaded_file($_FILES['archivoobj2']['tmp_name'], "docs/" . $nombrearchivo2));
        }
        if (!empty($nombrearchivo3)) {
            if (move_uploaded_file($_FILES['archivoobj3']['tmp_name'], "docs/" . $nombrearchivo3));
        }
        if (!empty($nombrearchivo4)) {
            if (move_uploaded_file($_FILES['archivoobj4']['tmp_name'], "docs/" . $nombrearchivo4));
        }
        if (!empty($nombrearchivo5)) {
            if (move_uploaded_file($_FILES['archivoobj5']['tmp_name'], "docs/" . $nombrearchivo5));
        }
    }

?>