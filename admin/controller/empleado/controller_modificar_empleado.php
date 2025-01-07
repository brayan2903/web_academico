<?php
    require "../../model/model_empleado.php";
    $MU = new Modelo_Empleado();//Instaciamos
    $id =strtoupper(htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8'));
    $nro =strtoupper(htmlspecialchars($_POST['nro'],ENT_QUOTES,'UTF-8'));
    $nom =$_POST['nom'];
    $apepa =$_POST['apepa'];
    $apema =$_POST['apema'];
    $fnac =strtoupper(htmlspecialchars($_POST['fnac'],ENT_QUOTES,'UTF-8'));
    $movil =strtoupper(htmlspecialchars($_POST['movil'],ENT_QUOTES,'UTF-8'));
    $dire =$_POST['dire'];
    $email =$_POST['email'];
    $esta =strtoupper(htmlspecialchars($_POST['esta'],ENT_QUOTES,'UTF-8'));
    $nombrearchivoImg =strtoupper(htmlspecialchars($_POST['nombrearchivoImg'],ENT_QUOTES,'UTF-8'));

    $rutaImg;
    if (empty($nombrearchivoImg)) {
        $rutaImg = "";
    } else {
        $rutaImg = 'controller/empleado/foto/'.$nombrearchivoImg;
    }
    $consulta = $MU->Modificar_Empleado($id,$nro,$nom,$apepa,$apema,$fnac,$movil,$dire,$email,$esta,$rutaImg);
    echo $consulta;
    if($consulta==1){
        if (!empty($nombrearchivoImg)) {
            if (move_uploaded_file($_FILES['archivoobjImg']['tmp_name'], "foto/" . $nombrearchivoImg));
        }
    }

?>