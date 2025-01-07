<?php
    require "../../model/model_reclamo.php";
    $MU = new Modelo_Reclamo();//Instaciamos

    $tipodoc =strtoupper(htmlspecialchars($_POST['tipodoc'],ENT_QUOTES,'UTF-8'));
    $nrodoc =strtoupper(htmlspecialchars($_POST['nrodoc'],ENT_QUOTES,'UTF-8'));
    $nombre =strtoupper(htmlspecialchars($_POST['nombre'],ENT_QUOTES,'UTF-8'));
    $apepat =strtoupper(htmlspecialchars($_POST['apepat'],ENT_QUOTES,'UTF-8'));
    $apemat =strtoupper(htmlspecialchars($_POST['apemat'],ENT_QUOTES,'UTF-8'));
    $dire =strtoupper(htmlspecialchars($_POST['dire'],ENT_QUOTES,'UTF-8'));
    $telefono =strtoupper(htmlspecialchars($_POST['telefono'],ENT_QUOTES,'UTF-8'));
    $email =strtoupper(htmlspecialchars($_POST['email'],ENT_QUOTES,'UTF-8'));

    $tipoincidencia =strtoupper(htmlspecialchars($_POST['tipoincidencia'],ENT_QUOTES,'UTF-8'));
    $fecha =strtoupper(htmlspecialchars($_POST['fecha'],ENT_QUOTES,'UTF-8'));
    $hora =strtoupper(htmlspecialchars($_POST['hora'],ENT_QUOTES,'UTF-8'));
    $asunto =strtoupper(htmlspecialchars($_POST['asunto'],ENT_QUOTES,'UTF-8'));
    $nombrearchivo =strtoupper(htmlspecialchars($_POST['nombrearchivo'],ENT_QUOTES,'UTF-8'));

    $ruta;
    if (empty($nombrearchivo)) {
        $ruta = "";
    } else {
        $ruta = 'controller/reclamo/archivos/'.$nombrearchivo;
    }

    $consulta = $MU->Registrar_Reclamo($tipodoc,$nrodoc,$nombre,$apepat,$apemat,$dire,$telefono,$email,$tipoincidencia,$fecha,$hora,$asunto,$ruta);
    echo $consulta;
    if($consulta==1){
        if (!empty($nombrearchivo)) {
            if (move_uploaded_file($_FILES['archivoobj']['tmp_name'], "archivos/" . $nombrearchivo));
        }
    }

?>