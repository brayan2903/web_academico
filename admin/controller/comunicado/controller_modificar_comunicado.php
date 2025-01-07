<?php
require "../../model/model_comunicado.php";
$MU = new Modelo_Comunicado(); //Instaciamos
$id = strtoupper(htmlspecialchars($_POST['idcom'], ENT_QUOTES, 'UTF-8'));
$titulo = strtoupper(htmlspecialchars($_POST['titulo'], ENT_QUOTES, 'UTF-8'));
$descripcion = strtoupper(htmlspecialchars($_POST['descripcion'], ENT_QUOTES, 'UTF-8'));
$nombrearchivo = strtoupper(htmlspecialchars($_POST['nombrearchivo'], ENT_QUOTES, 'UTF-8'));
$nombrearchivoImg = strtoupper(htmlspecialchars($_POST['nombrearchivoImg'], ENT_QUOTES, 'UTF-8'));
$estado = strtoupper(htmlspecialchars($_POST['estado'], ENT_QUOTES, 'UTF-8'));

$ruta;
$rutaImg;

if (empty($nombrearchivo)) {
    $ruta = "";
} else {
    $ruta = 'controller/comunicado/docs/' . $nombrearchivo;
}
if (empty($nombrearchivoImg)) {
    $rutaImg = "";
} else {
    $rutaImg = 'controller/comunicado/img/' . $nombrearchivoImg;
}

$consulta = $MU->Modificar_Comunicado($id, $titulo, $descripcion, $rutaImg, $ruta, $estado);
echo $consulta;
if ($consulta == 1) {
    if (!empty($nombrearchivo)) {
        if (move_uploaded_file($_FILES['archivoobj']['tmp_name'], "docs/" . $nombrearchivo));
    }
    if (!empty($nombrearchivoImg)) {
        if (move_uploaded_file($_FILES['archivoobjImg']['tmp_name'], "img/" . $nombrearchivoImg));
    }
}
