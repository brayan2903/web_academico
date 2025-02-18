<?php
require "../../model/model_documento.php";

$MU = new Modelo_Documento(); // Instanciamos el modelo

// Asegurar que la carpeta de destino exista
$uploadDir = "docs/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Validar entradas de $_POST
$numdoc         = isset($_POST['numdoc']) ? strtoupper(htmlspecialchars($_POST['numdoc'], ENT_QUOTES, 'UTF-8')) : '';
$tipo           = isset($_POST['tipo']) ? strtoupper(htmlspecialchars($_POST['tipo'], ENT_QUOTES, 'UTF-8')) : '';
$titulo         = isset($_POST['titulo']) ? strtoupper(htmlspecialchars($_POST['titulo'], ENT_QUOTES, 'UTF-8')) : '';
$nombrearchivo1 = isset($_POST['nombrearchivo1']) ? strtoupper(htmlspecialchars($_POST['nombrearchivo1'], ENT_QUOTES, 'UTF-8')) : '';
$nombrearchivo2 = isset($_POST['nombrearchivo2']) ? strtoupper(htmlspecialchars($_POST['nombrearchivo2'], ENT_QUOTES, 'UTF-8')) : '';
$nombrearchivo3 = isset($_POST['nombrearchivo3']) ? strtoupper(htmlspecialchars($_POST['nombrearchivo3'], ENT_QUOTES, 'UTF-8')) : '';
$nombrearchivo4 = isset($_POST['nombrearchivo4']) ? strtoupper(htmlspecialchars($_POST['nombrearchivo4'], ENT_QUOTES, 'UTF-8')) : '';
$nombrearchivo5 = isset($_POST['nombrearchivo5']) ? strtoupper(htmlspecialchars($_POST['nombrearchivo5'], ENT_QUOTES, 'UTF-8')) : '';
$idarea         = (isset($_POST['idarea']) && is_numeric($_POST['idarea'])) ? (int)$_POST['idarea'] : null;

// Construir rutas de archivos
$ruta1 = !empty($nombrearchivo1) ? $uploadDir . $nombrearchivo1 : "";
$ruta2 = !empty($nombrearchivo2) ? $uploadDir . $nombrearchivo2 : "";
$ruta3 = !empty($nombrearchivo3) ? $uploadDir . $nombrearchivo3 : "";
$ruta4 = !empty($nombrearchivo4) ? $uploadDir . $nombrearchivo4 : "";
$ruta5 = !empty($nombrearchivo5) ? $uploadDir . $nombrearchivo5 : "";

// Llamar al modelo para registrar, ahora con $numdoc como primer parámetro
$consulta = $MU->Registrar_Documento($numdoc, $tipo, $titulo, $ruta1, $ruta2, $ruta3, $ruta4, $ruta5, $idarea);

// Si el modelo devuelve 0, null, false, o algo que no sea "exitoso", asumimos error
if (!$consulta || $consulta == 0) {
    echo 0;
    exit();
}

// --- Manejar la subida de archivos ---
// Si algún archivo no se logra mover, podríamos indicar "0" y/o borrar lo ya subido.
function moverArchivo($archivoObj, $nombreArchivo) {
    global $uploadDir;
    $rutaDestino = $uploadDir . $nombreArchivo;

    if (!isset($_FILES[$archivoObj])) {
        return true; // Si no está, podría ser opcional
    }

    if ($_FILES[$archivoObj]['error'] !== UPLOAD_ERR_OK) {
        return false;
    }

    return move_uploaded_file($_FILES[$archivoObj]['tmp_name'], $rutaDestino);
}

// Subir archivos si existen nombres
if (!empty($nombrearchivo1) && !moverArchivo('archivoobj1', $nombrearchivo1)) { echo 0; exit(); }
if (!empty($nombrearchivo2) && !moverArchivo('archivoobj2', $nombrearchivo2)) { echo 0; exit(); }
if (!empty($nombrearchivo3) && !moverArchivo('archivoobj3', $nombrearchivo3)) { echo 0; exit(); }
if (!empty($nombrearchivo4) && !moverArchivo('archivoobj4', $nombrearchivo4)) { echo 0; exit(); }
if (!empty($nombrearchivo5) && !moverArchivo('archivoobj5', $nombrearchivo5)) { echo 0; exit(); }

// Si llegamos hasta aquí, todo OK
echo 1;  // ESTE VALOR COINCIDE CON if (resp == 1) en tu JS
exit();
